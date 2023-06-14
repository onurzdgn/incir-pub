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

    <div class="container ms-1 mw-100">
        <div class="row mb-1 mw-100">
            <div class="row mt-1 mw-100">
                <div class="col mw-100">
                    <button id="categoryOrder" class="btn btn-warning">Kategorileri Sırala</button>
                    <a href="" class="btn btn-warning">Alt Kategorileri Sırala</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row mb-1">
            <div class="col">
                <ul id="categoryList" class="list-group mw-50">
                    <li class="list-group-item mw-50">Veriler buraya gelecek ama önce butonlardan birini basman gerek.</li>
                    <li class="list-group-item">Acaba hangisine basacak &#129300;</li>
                </ul>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script type="application/javascript">
            $(document).ready(function() {
                $('#categoryOrder').click(function() {
                    var list = document.getElementById("categoryList");
                    $.ajax({
                        url: "/orderableCategories",
                        type: "GET",
                        
                        success: function(data) {
                            console.log(data);
                            for (var i = 0; i < data.length; i++) {
                                var li = document.createElement("li");
                                li.appendChild(document.createTextNode(data[i].name));
                                li.setAttribute("id", data[i].id);
                                li.setAttribute("class", "list-group-item");
                                list.appendChild(li);
                            }
                        },
                        error: function(data) {
                            alert("Hello! I am an alert box!");
                        }
                    });
                });
            });
        </script>
    @endsection
