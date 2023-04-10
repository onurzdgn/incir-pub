@extends('layouts.app')
@section('content')

<x-breadcrump title="Ürünler" />

<div class="container ms-1">
    <div class="row">
        <div class="col">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Yeni Ürün Ekle</button>
        </div>
    </div>
</div>

<div class="container mt-5 ms-1">
    <div class="row">
        <div class="col">
            <table id="example" class="table table-striped table-bordered-black" style="width:100%; background-color:#e6d8cc;">
                <thead>
                    <tr>
                        <th>Ürün Adı</th>
                        <th>Ürün Bilgisi</th>
                        <th>Ürün Resmi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->info }}</td>
                        <td>{{ $product->pic }}</td>
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
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yeni Ürün Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('addProduct') }}">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="productName" class="col-form-label">Ürün Adı:</label>
                        <input type="text" class="form-control" id="productName" name="productName" required>
                    </div>
                    <div class="mb-3">
                        <label for="productInfo" class="col-form-label">Ürün Bilgisi:</label>
                        <input type="text" class="form-control" id="productInfo" name="productInfo" required>
                    </div>
                    <div class="mb-3">
                        <label for="productPic" class="col-form-label">Ürün Fotoğrafı:</label>
                        <input type="file" class="form-control" id="productPic" accept="image/png, image/gif, image/jpeg" name="productPic">
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
                        <input type="text" class="form-control" id="productIngredients" name="productIngredients">
                    <div class="mb-3">
                        <label for="productPrice" class="col-form-label">Ürün Fiyatı:</label>
                        <input type="text" class="form-control" id="productPrice" name="productPrice" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Ürün EKle</button>
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