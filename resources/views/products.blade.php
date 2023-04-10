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


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yeni Ürün Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="productName" class="col-form-label">Ürün Adı:</label>
                        <input type="text" class="form-control" id="productName" required>
                    </div>
                    <div class="mb-3">
                        <label for="productInfo" class="col-form-label">Ürün Bilgisi:</label>
                        <input type="text" class="form-control" id="productInfo" required>
                    </div>
                    <div class="mb-3">
                        <label for="productPic" class="col-form-label">Ürün Fotoğrafı:</label>
                        <input type="file" class="form-control" id="productPic" accept="image/png, image/gif, image/jpeg">
                    </div>
                    <div class="mb-3">
                        <label for="productCategory" class="col-form-label">Ürün Kategorisi:</label required>
                        <select class="form-control" id="productCategory">
                            <option value="">Seçiniz</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="col-form-label">Ürün Fiyatı:</label>
                        <input type="text" class="form-control" id="productPrice" required>
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


<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

@endsection