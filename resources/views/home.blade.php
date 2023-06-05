@extends('layouts.app')
@section('content')

<x-breadcrump title="Anasayfa" />

<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h5 class="card-title">En Çok Ziyaret Edilen Sayfalar</h5>
                </div>
                <div class="card-body">
                    <ol>
                        <li>Yerli Kokteyller</li>
                        <li>Ulusal Kokteyller</li>
                        <li>Yiyecekler</li>
                        <li>Şişe Biralar</li>
                        <li>Shots</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h5 class="card-title">En Çok Zaman Geçirilen Sayfalar</h5>
                </div>
                <div class="card-body">
                    <ol>
                        <li>Yiyecekler</li>
                        <li>Yerli Kokteyller</li>
                        <li>Şişe Biralar</li>
                        <li>Ulusal Kokteyller</li>
                        <li>Shots</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h5 class="card-title">En Çok Ziyeret Eden Ülkeler</h5>
                </div>
                <div class="card-body">
                    <ol>
                        <li>Türkiye</li>
                        <li>Rusya</li>
                        <li>Ukranya</li>
                        <li>İngiltere</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection