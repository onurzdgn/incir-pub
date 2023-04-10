@extends('layouts.app')
@section('content')

<x-breadcrump title="Kategoriler" />

<div class="container ms-1">
    <div class="row">
        <div class="col">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Yeni Kategori Ekle</button>
        </div>
    </div>
</div>

<div class="container mt-5 ms-1">
    <div class="row">
        <div class="col">
            <table id="example" class="table table-striped table-bordered-black" style="width:100%; background-color:#e6d8cc;">
                <thead>
                    <tr>
                        <th>Kategori Adı</th>
                        <th>Kategori Adı(İngilizce)</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->eng_name }}</td>
                        <td>
                            <a href="#" class="btn btn-primary">Düzenle</a>
                            <a href="#" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yeni Kategori Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('addUser') }}">
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

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

@endsection