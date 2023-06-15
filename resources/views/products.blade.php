@extends('layouts.app')
@section('content')
    <x-breadcrump title="Ürünler" />

    <div class="container ms-1">
        <div class="row">
            <div class="col">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Yeni Ürün Ekle</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Yeni Ürün Ekle</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ url('addProduct') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="productName" class="col-form-label">Ürün Adı:</label>
                                        <input type="text" class="form-control" id="productName" name="productName"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="productInfo" class="col-form-label">Ürün Bilgisi:</label>
                                        <input type="text" class="form-control" id="productInfo" name="productInfo">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productPic" class="col-form-label">Ürün Fotoğrafı:</label><br>
                                        <input type="file" class="form-control-file" id="productPic" name="productPic"
                                            accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productCategory" class="col-form-label">Ürün Kategorisi:</label>
                                        <select class="form-control" id="productCategory" name="productCategory" required>
                                            <option value="">Seçiniz</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="productIngredients" class="col-form-label">Ürün İçerikleri:</label>
                                        <input type="text" class="form-control" id="productIngredients"
                                            name="productIngredients">
                                        <div class="mb-3">
                                            <label for="productPrice" class="col-form-label">Ürün Fiyatı:</label>
                                            <input type="text" class="form-control" id="productPrice" name="productPrice"
                                                required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-submit">Ürün Ekle</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 ms-1">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-l-12 col-12 col-m-12 col-s-12 col-xs-12 col-xxs-12 p-1"
                style="background-color:#e6d8cc;">
                <table id="example" class="table table-striped table-bordered-black display nowrap"
                    style="width:100%; background-color:#e6d8cc;">
                    <thead>
                        <tr>
                            <th>Ürün ID</th>
                            <th>Ürün Adı</th>
                            <th>Ürün Bilgisi</th>
                            <th>Ürün Resmi</th>
                            <th>Ürün Kategorisi</th>
                            <th>Ürün İçerikleri</th>
                            <th>Ürün Fiyatı</th>
                            <th>Ürün İşlemleri</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            @if ($product->is_active == 1)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->info ?? 'Bilgi yok' }}</td>
                                    <td>@if ($product->pic)
                                            <img src="{{ asset('storage/' . $product->pic) }}" width="100" height="100">
                                        @else
                                            Ürün görseli yok
                                        @endif
                                    <td>
                                        @foreach ($categories as $category)
                                            @if ($category->id == $product->category_id)
                                                {{ $category->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $product->ingredients }}</td>
                                    <td>{{ $product->price }}₺</td>
                                    <td>
                                        <a class="btn btn-primary" href="/product/{{ $product->id }}"><i
                                                class="bi bi-pen"></i></a>
                                    </td>

                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th><input type="number" placeholder="ID" style="width: 70px;"></th>
                            <th><input type="text" placeholder="Ürün Adı"></th>
                            <th>Ürün Bilgisi</th>
                            <th></th>
                            <th>Ürün Kategorisi</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {

            $('#example').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Turkish.json"
                },
                order: [
                    [0, "desc"],
                ],
                columnDefs: [{
                    orderable: false,
                    targets: [7]
                }],
                initComplete: function() {
                    this.api()
                        .columns(0, 1, 5, 6)
                        .every(function() {
                            var that = this;

                            $('input', this.footer()).on('keyup change clear', function() {
                                if (that.search() !== this.value) {
                                    that.search(this.value).draw();
                                }
                            });
                        });
                    this.api()
                        .columns(4)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select><option value="">Ürün Kategorisi</option></select>')
                                .appendTo($(column.footer()).empty())
                                .on('change', function() {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column.search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                                });

                            column
                                .data()
                                .unique()
                                .sort()
                                .each(function(d, j) {
                                    select.append('<option value="' + d + '">' + d +
                                        '</option>');
                                });
                        });
                    this.api()
                        .columns(2)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select><option value="">Ürün Bilgisi</option></select>')
                                .appendTo($(column.footer()).empty())
                                .on('change', function() {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column.search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                                });

                            column
                                .data()
                                .unique()
                                .sort()
                                .each(function(d, j) {
                                    select.append('<option value="' + d + '">' + d +
                                        '</option>');
                                });
                        });
                },
            });
        });
    </script>
@endsection
