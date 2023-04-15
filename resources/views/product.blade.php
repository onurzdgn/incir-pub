@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-5" style="background-color: #e6d8cc;">
            <form method="POST" action="{{ url('addProduct') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
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
                    <input type="file" class="form-control-file" id="productPic" name="productPic" accept="image/png, image/gif, image/jpeg">
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
                    <button type="submit" class="btn btn-primary btn-submit">Ürün Ekle</button>
            </form>
        </div>
    </div>
    <div class="col-5">
        <img src="/publicImages/products/{{ $product['image'] }}" alt="" height="600px">
    </div>
</div>

@endsection