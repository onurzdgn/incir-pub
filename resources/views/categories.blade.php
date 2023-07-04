@extends('layouts.app')
@section('content')
    <x-breadcrump title="Kategoriler" />

    {{-- Modal Button --}}
    <div class="container ms-1 mw-100">
        <div class="row mb-1 mw-100">
            <div class="col mw-100">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoriesModal">Yeni Kategori
                    Ekle</button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subcategoriesModal">Yeni Alt Kategori
                    Ekle</button>
            </div>
        </div>
    </div>

    {{-- All Categories Table --}}
    <div class="container mt-5 ms-1">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-l-12 col-12 col-m-12 col-s-12 col-xs-12 col-xxs-12 p-1"
                style="background-color:#e6d8cc;">
                <table id="categories" class="table table-striped table-bordered-black display nowrap"
                    style="width:100%; background-color:#e6d8cc;">
                    <thead>
                        <tr>
                            <th class="text-center">Kategori Adı</th>
                            <th class="text-center">Kategori Adı(İngilizce)</th>
                            <th class="text-center">Ana Kategori</th>
                            <th class="text-center">İşlemler</th>
                            <th class="text-center">Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td class="text-center">{{ $category->name }}</td>
                                <td class="text-center">{{ $category->eng_name }}</td>
                                <td class="text-center">
                                    @if ($category->parent_name == null)
                                        Ana Kategori
                                    @else
                                        {{ $category->parent_name }}
                                    @endif
                                <td class="text-center">
                                    <a href="/category/{{ $category->id }}" class="btn btn-primary"><i
                                            class="bi bi-pen"></i></a>
                                </td class="text-center">
                                <td class="text-center">{{ $category->id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center"><input type="text" placeholder="Kategori"></th>
                            <th class="text-center"><input type="text" placeholder="Kategori Adı(İngilizce)"></th>
                            <th class="text-center">Ana Kategori</th>
                            <th class="text-center"></th>
                            <th class="text-center"><input type="number" placeholder="ID" style="width: 70px;"></th>
                        </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- Categories Modal --}}
    <div class="modal fade" id="categoriesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yeni Kategori Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('addCategory') }}">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="categoryName" class="col-form-label">Kategori Adı:</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoryNameEng" class="col-form-label">Kategori Adı(İngilizce):</label>
                            <input type="text" class="form-control" id="categoryNameEng" name="categoryNameEng" required>
                        </div>
                        <button type="submit" class="btn btn-submit btn-primary">Kategori Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Sub Categories Modal --}}
    <div class="modal fade" id="subcategoriesModal" tabindex="-1" aria-labelledby="subcategoriesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subcategoriesModalLabel">Yeni Alt Kategori Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('addSubcategory') }}">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="categoryName" class="col-form-label">Alt Kategori Adı:</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                        </div>
                        <div class="mb-3">
                            <label for="mainCategory" class="col-form-label">Ana Kategori:</label>
                            <select name="mainCategory" id="mainCategory">
                                <option value="0">--Ana Kategori Seçin--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-submit btn-primary">Alt Kategori Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#categories').DataTable({
                order: [
                    [4, 'asc']
                ],
                columnDefs: [{
                        targets: [0],
                        width: "30%"
                    },
                    {
                        targets: [1],
                        width: "30%"
                    },
                    {
                        targets: [2],
                        width: "30%"
                    },
                    {
                        orderable: false,
                        targets: 3,
                        width: "5%"
                    },
                    {
                        targets: [4],
                        width: "5%"
                    }
                ],
                responsive: true,
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Turkish.json"
                },
                initComplete: function() {
                    this.api(0, 1)
                        .columns()
                        .every(function() {
                            var that = this;

                            $('input', this.footer()).on('keyup change clear', function() {
                                if (that.search() !== this.value) {
                                    that.search(this.value).draw();
                                }
                            });
                        });
                    this.api()
                        .columns(2)
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select><option value="">---Ürün Kategorisi---</option></select>'
                                )
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
