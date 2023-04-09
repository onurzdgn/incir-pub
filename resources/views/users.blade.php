@extends('layouts.app')
@section('content')

<x-breadcrump title="Kullanıcılar" />

<div class="container ms-1">
    <div class="row">
        <div class="col">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Yeni Kullanıcı Ekle</button>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yeni Kullancı Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="userLoginName" class="col-form-label">Kullanıcı Giriş Adı:</label>
                        <input type="text" class="form-control" id="userLoginName" autocomplete="false">
                    </div>
                    <div class="mb-3">
                        <label for="userName" class="col-form-label">Kullanıcı Adı:</label>
                        <input type="text" class="form-control" id="userName" autocomplete="false">
                    </div>
                    <div class="mb-3">
                        <label for="userSurname" class="col-form-label">Kullanıcı Soyadı:</label>
                        <input type="text" class="form-control" id="userSurname" autocomplete="false">
                    </div>
                    <div class="mb-3">
                        <label for="userPhone" class="col-form-label">Kullanıcı Telefonu:</label>
                        <input type="text" class="form-control" id="userPhone" autocomplete="false">
                    </div>
                    <div class="mb-3">
                        <label for="userRank" class="col-form-label">Kullanıcı Rütbe:</label>
                        <input type="text" class="form-control" id="userRank" autocomplete="false">
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="col-form-label">Kullanıcı Şifresi:</label>
                        <input type="password" class="form-control" id="userPassword" autocomplete="false">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                <button type="button" class="btn btn-primary">Ürün EKle</button>
            </div>
        </div>
    </div>
</div>
       
@endsection