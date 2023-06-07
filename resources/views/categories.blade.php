@extends('layouts.app')
@section('content')

<x-breadcrump title="Kategoriler" />

<!-- Modal Button -->
<div class="container ms-1">
    <div class="row">
        <div class="col">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoriesModal">Yeni Kategori Ekle</button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subcategoriesModal">Yeni Alt Kategori Ekle</button>
        </div>
    </div>
</div>

<!-- All Categories Table -->
<div class="container mt-5 ms-1">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-l-12 col-12 col-m-12 col-s-12 col-xs-12 col-xxs-12">
            <table id="categories" class="table table-striped table-bordered-black" style="width:100%; background-color:#e6d8cc;">
                <thead>
                    <tr>
                        <th>Kategori Adı</th>
                        <th>Kategori Adı(İngilizce)</th>
                        <th>Ana Kategori</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->eng_name }}</td>
                        <td>
                            @if ($category->parent_id == null)
                            Ana Kategori
                            @else
                            {{ $category->parent_id }}
                            @endif
                        <td>
                            <a href="/category/{{ $category->id }}" class="btn btn-primary"><i class="bi bi-pen"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Categories Modal -->
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

<!-- Sub Categories Modal -->
<div class="modal fade" id="subcategoriesModal" tabindex="-1" aria-labelledby="subcategoriesModalLabel" aria-hidden="true">
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
                        <label for="categoryName" class="col-form-label">Kategori Adı:</label>
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

<script type="application/javascript">
    $(document).ready(function() {
        $('#categories').DataTable();
    });
</script>

@endsection