@extends('layouts.app')
@section('css')
    <style>
        li {
            list-style: none;
            size: 50% !important;
        }

        .list-group-item {
            cursor: move;
        }

        .list-group-item.active {
            background-color: #cfd8dc;
            border-color: #cfd8dc;
        }

        .list-group-item.active .list-group-item {
            pointer-events: none;
        }

        .list-group-item.active .list-group-item .list-group-item {
            pointer-events: all;
        }

        .list-group-item.active .list-group-item .list-group-item .list-group-item {
            pointer-events: all;
        }

        .list-group-item.active .list-group-item .list-group-item .list-group-item .list-group-item {
            pointer-events: all;
        }

        .list-group-item.active .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item {
            pointer-events: all;
        }

        .list-group-item.active .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item {
            pointer-events: all;
        }

        .list-group-item.active .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item {
            pointer-events: all;
        }

        .list-group-item.active .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item .list-group-item {
            pointer-events: all;
        }

        .list-group-item.a {
            background-color: #cfd8dc;
            border-color: #cfd8dc;
        }
    </style>
@endsection
@section('content')
    <x-breadcrump title="Ürün Düzenle" />

    <div class="container ms-1 mb-4">
        <div class="row mb-1">
            <div class="row mt-1">
                <div class="col">
                    <label for="productsSelect" class="textBodyColor">
                        <h5>Lütfen Sıralamak istediğiniz kategoriyi seçin:</h5>
                    </label>
                    <div class="textBodyColor mb-3"><small>Lütfen alt kategorisi olan kategorilerin alt kategorisini
                            seçin!</small> <small class="text-danger"><b>SADECE BİRİNİ SEÇMEN GEREK!!!</b></small></div>
                    <label for="mainCategoryProducts" class="textBodyColor">Ana Kategori Seçiniz:</label>
                    <select class="form-control w-25 mt-2" id="mainCategoryProducts">
                        <option value="0">Seçiniz</option>
                        @foreach ($mainCategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col">
                    <label for="subCategoryProducts" class="textBodyColor">Alt Kategori Seçiniz:</label>
                    <select class="form-control w-25 mt-2" id="subCategoryProducts">
                        <option value="0">Seçiniz</option>
                        @foreach ($subCategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        var mainCategoryProducts = document.getElementById("mainCategoryProducts");
        var subCategoryProducts = document.getElementById("subCategoryProducts");
        var categoryList = document.getElementById("categoryList");

        // Get Categories
        mainCategoryProducts.addEventListener("change", function() {
            var mainCategory = mainCategoryProducts.value;
            $.ajax({
                url: "/orderableProducts/" + mainCategory,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    categoryList.replaceChildren();
                    subCategoryProducts.selectedIndex = 0;
                    for (var i = 0; i < data.length; i++) {
                        var li = document.createElement("li");
                        li.appendChild(document.createTextNode(data[i].name));
                        li.setAttribute("id", data[i].id);
                        li.setAttribute("class", "list-group-item");
                        categoryList.appendChild(li);
                    }
                },
                error: function(data) {
                    alert("Hello! I am an alert box!");
                }
            });
        });

        // Get Products
        subCategoryProducts.addEventListener("change", function() {
            var subCategory = subCategoryProducts.value;
            $.ajax({
                url: "/orderableProducts/" + subCategory,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    categoryList.replaceChildren();
                    mainCategoryProducts.selectedIndex = 0;
                    for (var i = 0; i < data.length; i++) {
                        var li = document.createElement("li");
                        li.appendChild(document.createTextNode(data[i].name));
                        li.setAttribute("id", data[i].id);
                        li.setAttribute("class", "list-group-item");
                        categoryList.appendChild(li);
                    }
                },
                error: function(data) {
                    alert("Hello! I am an alert box!");
                }
            });
        });
        
    </script>
@endsection
