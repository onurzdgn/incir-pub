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

    <x-breadcrump title="Kategori Düzenle" />

    {{-- Buttons --}}
    <div class="container ms-1 mw-100">
        <div class="row mb-1 mw-100">
            <div class="row mt-1 mw-100">
                <div class="col mw-100">
                    <button id="categoryOrder" class="btn btn-warning">Kategorileri Sırala</button>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#subcategoriesModal">Alt
                        Kategorileri Sırala</button>
                </div>
            </div>
        </div>
    </div>

    {{-- List --}}
    <div class="container mt-4">
        <div class="row mb-1">
            <div class="col">
                <ul id="categoryList" class="list-group mw-50" style="max-width: 1000px;">
                    <li class="list-group-item mw-50">Veriler buraya gelecek ama önce butonlardan birini basman gerek.</li>
                    <li class="list-group-item">Acaba hangisine basacak &#129300;</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="subcategoriesModal" tabindex="-1" aria-labelledby="subcategoriesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subcategoriesModalLabel">Sıralamak İstediğin Alt Kategoriyi Seç</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <select class="form-control" id="subcategorySelect">
                        <option value="0">Seçiniz</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script type="application/javascript">
            $(document).ready(function() {

                // Get Categories
                $('#categoryOrder').click(function() {
                    var list = document.getElementById("categoryList");
                    $.ajax({
                        url: "/orderableCategories",
                        type: "GET",
                        success: function(data) {
                            console.log(data);
                            list.replaceChildren();
                            for (var i = 0; i < data.length; i++) {
                                var li = document.createElement("li");
                                li.appendChild(document.createTextNode(data[i].name));
                                li.setAttribute("id", data[i].id);
                                li.setAttribute("class", "list-group-item");
                                li.setAttribute("order", data[i].order);
                                list.appendChild(li);
                            }
                        },
                        error: function(data) {
                            alert("Hello! I am an alert box!");
                        }
                    });
                });

                // Get Subcategories
                $('#subcategorySelect').change(function() {
                    var list = document.getElementById("categoryList");
                    var subcategory = document.getElementById("subcategorySelect").value;
                    var subCategoryBox = document.getElementById("subcategorySelect");
                    $.ajax({
                        url: "/orderableSubCategories/" + subcategory,
                        type: "GET",
                        success: function(data) {
                            console.log(data);
                            list.replaceChildren();
                            for (var i = 0; i < data.length; i++) {
                                var li = document.createElement("li");
                                li.appendChild(document.createTextNode(data[i].name));
                                li.setAttribute("id", data[i].id);
                                li.setAttribute("class", "list-group-item");
                                list.appendChild(li);
                            }
                            subCategoryBox.value = 0;
                            $('#subcategoriesModal').hide();
                            $(".modal-backdrop").remove();
                        },
                        error: function(data) {
                            alert("Hello! I am an alert box!");
                        }
                    });
                });
            });
        </script>
@endsection
