@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-5" style="background-color: #e6d8cc;">
                <form method="POST" action="{{ url('updateCategory') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="categoryId" value="{{ $category['id'] }}">
                    <div class="mb-3">
                        <label for="categoryName" class="col-form-label">Kategory Adı:</label>
                        <input type="text" class="form-control" id="categoryName" name="categoryName" required
                            value="{{ $category['name'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="engCategoryName" class="col-form-label">İngilizce Kategory Adı:</label>
                        <input type="text" class="form-control" id="engCategoryName" name="engCategoryName"
                            value="{{ $category['eng_name'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="mainCategory" class="col-form-label">Ana Kategori:</label>
                        <select name="mainCategory" id="mainCategory">
                            @if ($category->parent_id !== null) {{-- Eğer kategori ana kategori değilse --}}
                                @foreach ($allCategories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == $parentCategory->id) selected @endif >{{ $category->name }}</option>
                                @endforeach
                            @else {{-- Eğer kategori ana kategori ise --}}
                                <option value="0">Ana Kategori</option>
                                @foreach ($allCategories as $categoryAll)
                                    @if ($category['id'] !== $categoryAll->id)
                                        <option value="{{ $categoryAll->id }}">{{ $categoryAll->name }}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-submit">Ürün Güncelle</button>
                </form>
            </div>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-danger m-2 p-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Kategoriyi Sil
            </button>
        </div>
    </div>

@endsection
