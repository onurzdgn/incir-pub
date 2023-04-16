@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-5" style="background-color: #e6d8cc;">
            <form method="POST" action="{{ url('updateProduct') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $product['id'] }}">
                <div class="mb-3">
                    <label for="productName" class="col-form-label">Ürün Adı:</label>
                    <input type="text" class="form-control" id="productName" name="productName" required value="{{ $product['name'] }}">
                </div>
                <div class="mb-3">
                    <label for="productInfo" class="col-form-label">Ürün Bilgisi:</label>
                    <input type="text" class="form-control" id="productInfo" name="productInfo" value="{{ $product['info'] }}">
                </div>
                <div class="mb-3">
                    <label for="productPic" class="col-form-label">Ürün Fotoğrafı:</label><br>
                    @if ($product['image'] == null)
                    <input type="file" class="form-control-file" id="productPic" name="productPic" accept="image/png, image/gif, image/jpeg">
                    @else
                    <input type="file" class="form-control-file" id="productPic" name="productPic" accept="image/png, image/gif, image/jpeg">
                    <input type="hidden" name="productPic2" id="productPic" value="{{ $product['image'] }}">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="productCategory" class="col-form-label">Ürün Kategorisi:</label>
                    <select class="form-control" id="productCategory" name="productCategory" required>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="productIngredients" class="col-form-label">Ürün İçerikleri:</label>
                    <input type="text" class="form-control" id="productIngredients" name="productIngredients" value="{{ $product['ingredients'] }}">
                    <div class="mb-3">
                        <label for="productPrice" class="col-form-label">Ürün Fiyatı:</label>
                        <input type="text" class="form-control" id="productPrice" name="productPrice" required value="{{ $product['price'] }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">Ürün Güncelle</button>
            </form>
        </div>
    </div>
    <div class="col-5">
        <img src="/publicImages/products/{{ $product['image'] }}" alt="Görsel yok 😢" height="600px" width="540px">
    </div>
    <div class="col-2">
        <button type="button" class="btn btn-danger m-2 p-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ürünü Sil
        </button>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                Ürün Silinecek Emin Misiniz? 😱
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vaz Geçtim, Kapat</button>
                <a type="button" class="btn btn-danger" href="/deleteProduct/{{$product['id']}}">Evet Sil</a>
            </div>
        </div>
    </div>
</div>

@endsection