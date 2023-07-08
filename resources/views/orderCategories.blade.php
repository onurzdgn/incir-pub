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
                <ul id="categoryList" class=" mw-50 sortable" style="max-width: 1000px;">
                    <li class="list-group-item mw-50">Veriler buraya gelecek ama önce butonlardan birini basman gerek.</li>
                    <li class="list-group-item">Acaba hangisine basacak &#129300;</li>
                </ul>
                <button id="updateButton" class="btn btn-success updateModal disabled" data-bs-toggle="modal"
                    >Kaydet</button>
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

    {{-- Update Category Modal --}}
    <div class="modal fade" id="updateCategoryModal" tabindex="-1" aria-labelledby="updateCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subcategoriesModalLabel">Lütfen Gerçekleşecek Değişiklikleri Kontol Edin
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <th>Ad</th>
                            <th>Sıra</th>
                            <th>id</th>
                        </thead>
                        <tbody id="updateTable">

                        </tbody>
                    </table>
                    <form method="POST" action="{{ url('updateOrder') }}">
                        @csrf
                        <div id="updateDiv"></div>
                        <button type="submit" class="btn btn-success">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Update Subcategory Modal --}}
    <div class="modal fade" id="updateSubCategoryModal" tabindex="-1" aria-labelledby="updateSubCategoryategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subcategoriesModalLabel">Lütfen Gerçekleşecek Değişiklikleri Kontol Edin
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <th>Ad</th>
                            <th>Sıra</th>
                            <th>id</th>
                        </thead>
                        <tbody id="updateTable">

                        </tbody>
                    </table>
                    <form method="POST" action="{{ url('updateSubcategoryOrder') }}">
                        @csrf
                        <div id="updateDiv"></div>
                        <button type="submit" class="btn btn-success">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script type="application/javascript">
            $(document).ready(function() {

                $( function() {
                    $( ".sortable" ).sortable({
                        axis: "y",
                        update: function (event, ui) {
                            var data = $(this).sortable('serialize');
                            // console.log(data);

                            $( ".sortable li" ).each(function( index ) {
                                $(this).attr("order", index);
                                console.log( index + ": " + $( this ).text() + ", id:" + $( this ).attr("id") + ", order:" + $( this ).attr("order"));
                            });

                            // POST to server using $.post or $.ajax
                            if (data != null) {
                                console.log(data);
                            }

                            // $.ajax({
                            //     data: data,
                            //     type: 'POST',
                            //     url: '/updateOrder',
                            //     success: function (data) {
                            //         console.log(data);
                            //     }
                            // });
                        }
                    });
                } );

                // Get Categories
                $('#categoryOrder').click(function() {
                    var button = document.getElementById("updateButton");
                    var list = document.getElementById("categoryList");
                    $.ajax({
                        url: "/orderableCategories",
                        type: "GET",
                        success: function(data) {
                            console.log(data);
                            list.replaceChildren();
                            $('#updateButton').removeClass("disabled");
                            button.setAttribute("data-bs-target", "#updateCategoryModal");
                            
                            for (var i = 0; i < data.length; i++) {
                                listElement = `<li class="list-group-item ui-state-default" id="${data[i].id}" order="${data[i].order}">
                                    ${data[i].name}
                                    </li>`;
                                list.insertAdjacentHTML('beforeend', listElement);
                                // var li = document.createElement("li");
                                // li.appendChild(document.createTextNode(data[i].name));
                                // li.setAttribute("id", data[i].id);
                                // li.setAttribute("class", "list-group-item ui-state-default");
                                // li.setAttribute("order", data[i].order);
                                // list.appendChild(li);
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
                    var button = document.getElementById("updateButton");
                    var subcategory = document.getElementById("subcategorySelect").value;
                    var subCategoryBox = document.getElementById("subcategorySelect");
                    $.ajax({
                        url: "/orderableSubCategories/" + subcategory,
                        type: "GET",
                        success: function(data) {
                            console.log(data);
                            list.replaceChildren();

                            $('#updateButton').removeClass("disabled");
                            button.setAttribute("data-bs-target", "#updateSubCategoryModal");

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

                $('.updateModal').click(function () {
                   var table = document.getElementById("updateTable");
                   var div = document.getElementById("updateDiv");
                   var list = document.getElementById("categoryList");

                    table.replaceChildren();
                    div.replaceChildren();

                    for (let i = 0; i < list.children.length; i++) {
                        var tr = document.createElement("tr");
                        var td1 = document.createElement("td");
                        var td2 = document.createElement("td");
                        var td3 = document.createElement("td");
                        var input = document.createElement("input");

                        td1.appendChild(document.createTextNode(list.children[i].innerText));
                        td2.appendChild(document.createTextNode(list.children[i].getAttribute("order")));
                        td3.appendChild(document.createTextNode(list.children[i].getAttribute("id")));
                        input.setAttribute("type", "hidden");
                        input.setAttribute("name", list.children[i].getAttribute("id"));
                        input.setAttribute("value", list.children[i].getAttribute("order"));

                        tr.appendChild(td1);
                        tr.appendChild(td2);
                        tr.appendChild(td3);
                        
                        table.appendChild(tr);
                        div.appendChild(input);
                    }
                });
            });
        </script>
@endsection
