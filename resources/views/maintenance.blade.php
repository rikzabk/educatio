@extends('layout.auth')

@section('title')
    <title>Under Construction</title>
    <link rel="stylesheet" href="{{ asset('css/maintenance.css') }}">
@endsection

@section('container')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row g-3">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset('img/educatio-new.png') }}" alt="" style="max-width:70%;">
                <p class="img_title text-wrap fw-bold text-center">Jika kita tidak pernah mencoba, maka kita tidak akan pernah tau.</p>
                <p class="img_subtitle text-wrap fw-bold text-center">Coba berbagai macam Tryout UTBK Online dari Educatio</p>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center animate__animated animate__fadeIn">
                <div class="card p-3 shadow" style="width: 100%;">
                    <div class="card-body text-center d-grid gap-3">
                        <p class="card-title fs-1 fw-bold" style="color: #FF7A00;">COMING SOON</p>
                        <p class="card-subtitle fs-4">We are currently working on this feature and will launch soon!</p>
                        <p class="card-subtitle fs-6 fw-bold">Stay connected, stay updated!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection