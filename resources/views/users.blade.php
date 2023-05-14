@extends('layouts.app')
@section('content')

<x-breadcrump title="Kullanıcılar" />

<div class="container ms-1">
    <div class="row">
        <div class="col">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Yeni Kullanıcı Ekle</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yeni Kullancı Ekle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ url('addUser') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label for="userLoginName" class="col-form-label">Kullanıcı Giriş Adı:</label>
                                    <input type="text" class="form-control" id="userLoginName" name="userLoginName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="userName" class="col-form-label">Kullanıcı Adı:</label>
                                    <input type="text" class="form-control" id="userName" name="userName" autocomplete="false" required>
                                </div>
                                <div class="mb-3">
                                    <label for="userSurname" class="col-form-label">Kullanıcı Soyadı:</label>
                                    <input type="text" class="form-control" id="userSurname" name="userSurname" autocomplete="false" required>
                                </div>
                                <div class="mb-3">
                                    <label for="userMail" class="col-form-label">Kullanıcı Mail:</label>
                                    <input type="email" class="form-control" id="userMail" name="userMail" autocomplete="false" required>
                                </div>
                                <div class="mb-3">
                                    <label for="userPhone" class="col-form-label">Kullanıcı Telefonu:</label>
                                    <input type="tel" class="form-control" id="userPhone" name="userPhone" autocomplete="false" pattern="[0-9]{4}[0-9]{3}[0-9]{2}[0-9]{2}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="userRank" class="col-form-label" required>Kullanıcı Rütbe:</label>
                                    <select name="userRank" id="userRank" names="userRank" class="form-control" required>
                                        <option value="">---Kullanıcı Rolü Seçiniz---</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Sahip</option>
                                        <option value="3">Kullanıcı</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="userPassword" class="col-form-label">Kullanıcı Şifresi:</label>
                                    <input type="password" class="form-control" id="userPassword" name="userPassword" autocomplete="false" required>
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
        <div class="col p-1" style="background-color:#e6d8cc;">
            <table id="example" class="table table-striped table-bordered-black" style="width:100%; background-color:#e6d8cc;">
                <thead>
                    <tr>
                        <th>Kullanıcı ID</th>
                        <th>Kullancı Adı</th>
                        <th>Kullanıcı Bilgisi</th>
                        <th>Kullanıcı Resmi</th>
                        <th>Kullanıcı Kategorisi</th>
                        <th>Kullanıcı İçerikleri</th>
                        <th>Kullanıcı Fiyatı</th>
                        <th>Kullanıcı İşlemleri</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    @if ($user->is_active == 1)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->info ?? 'Bilgi yok'}}</td>
                        <td><img src="publicImages/users/{{ $user->image }}" alt="" height="100px"></td>
                        <td>
                            @foreach ($categories as $category)
                            @if ($category->id == $user->category_id)
                            {{ $category->name }}
                            @endif
                            @endforeach
                        </td>
                        <td>{{ $user->ingredients }}</td>
                        <td>{{ $user->price }}₺</td>
                        <td>
                            <a class="btn btn-primary" href="/user/{{ $user->id }}"><i class="bi bi-pen"></i></a>
                        </td>

                    </tr>
                    @endif
                    @endforeach
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th><input type="number" placeholder="ID" style="width: 70px;"></th>
                        <th><input type="text" placeholder="Kullanıcı Adı"></th>
                        <th>Kullanıcı Bilgisi</th>
                        <th></th>
                        <th>Kullanıcı Kategorisi</th>
                    </tr>
                </tfoot> -->
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {

        $('#example').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Turkish.json"
            },
            order: [
                [0, "desc"],
            ],
            // columnDefs: [{
            //     orderable: false,
            //     targets: [7]
            // }],
            // initComplete: function() {
            //     this.api()
            //         .columns(0, 1, 5, 6)
            //         .every(function() {
            //             var that = this;

            //             $('input', this.footer()).on('keyup change clear', function() {
            //                 if (that.search() !== this.value) {
            //                     that.search(this.value).draw();
            //                 }
            //             });
            //         });
            //     this.api()
            //         .columns(4)
            //         .every(function() {
            //             var column = this;
            //             var select = $('<select><option value="">Kullanıcı Kategorisi</option></select>')
            //                 .appendTo($(column.footer()).empty())
            //                 .on('change', function() {
            //                     var val = $.fn.dataTable.util.escapeRegex($(this).val());

            //                     column.search(val ? '^' + val + '$' : '', true, false).draw();
            //                 });

            //             column
            //                 .data()
            //                 .unique()
            //                 .sort()
            //                 .each(function(d, j) {
            //                     select.append('<option value="' + d + '">' + d + '</option>');
            //                 });
            //         });
            //     this.api()
            //         .columns(2)
            //         .every(function() {
            //             var column = this;
            //             var select = $('<select><option value="">Kullanıcı Bilgisi</option></select>')
            //                 .appendTo($(column.footer()).empty())
            //                 .on('change', function() {
            //                     var val = $.fn.dataTable.util.escapeRegex($(this).val());

            //                     column.search(val ? '^' + val + '$' : '', true, false).draw();
            //                 });

            //             column
            //                 .data()
            //                 .unique()
            //                 .sort()
            //                 .each(function(d, j) {
            //                     select.append('<option value="' + d + '">' + d + '</option>');
            //                 });
            //         });
            // },
        });
    });
</script>

@endsection