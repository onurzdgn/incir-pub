@extends('layouts.app')
@section('content')
    <x-breadcrump title="Ürün Düzenle" />

    <div class="container ms-1 mb-4">
        <div class="row mb-1">
            <div class="row mt-1">
                <div class="col">
                    <label for="productsSelect" style="color:#e6d8cc;"><h5>Lütfen Sıralamak istediğiniz kategoriyi seçin:</h5></label>
                    <div style="color:#e6d8cc;"><small>Lütfen alt kategorisi olan kategorilerin alt kategorisini seçin!</small></div>
                    <select class="form-control w-25 mt-2" id="productsSelect">
                        <option value="0">Seçiniz</option>
                        {{-- @foreach ($produrcts as $produrct)
                            <option value="{{ $produrct->id }}">{{ $produrct->name }}</option>
                        @endforeach --}}
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row mb-1">
            <div class="col">
                <ul id="categoryList" class="list-group mw-50">
                    <li class="list-group-item mw-50">Veriler buraya gelecek ama önce butonlardan birini basman gerek.</li>
                    <li class="list-group-item">Acaba hangisini seçecek &#129300;</li>
                    <li class="list-group-item">Umarım çok ürün gelmez, yorulurum &#128546;</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
