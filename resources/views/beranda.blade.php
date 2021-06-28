@extends('layout.main')

@section('title')
    <title>Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('beranda', 'active')

@section('container')
    <div class="container-fluid">
        <div class="container-sm d-grid gap-3"> 
            <div class="container-sm animate__animated animate__fadeIn">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('img/home-banner.png') }}" class="card-img" alt="...">
                    <div class="card-img-overlay text-center d-flex flex-column align-items-center justify-content-center gap-2">
                        <a href="{{ route('registration') }}" class="btn btn-banner-submit">Daftarkan dirimu!</a>
                        <a href="{{ route('login') }}" class="btn btn-banner">Sudah punya akun?</a>
                    </div>
                </div>
            </div>
            
            <div class="container-sm animate__animated animate__fadeInRight">
                <div class="card p-3 shadow-sm" style="width: 100%;">
                    <div class="row g-0 d-flex align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset('img/first-content.png') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 d-flex flex-row align-items-center">
                            <div class="card-body text-center">
                                <p class="card-title fs-4 fw-bold" style="color: #FF7A00;">Ngerasa sulit cari waktu belajar UTBK ditengah sibuknya tugas sekolah?</p>
                                <p class="card-text">Dengan bergabung bersama Educatio kamu dapat mengikuti tryout dan mempelajari pembahasan UTBK kapan pun dan di mana pun kamu berada!</p>
                                <a href="{{ route('login') }}" class="btn btn-submit">Pilih tryout kamu!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-sm animate__animated animate__fadeInLeft animate__delay-1s">
                <div class="card p-3 shadow-sm" style="width: 100%;">
                    <div class="row g-0 d-flex align-items-center">
                        <div class="col-md-8 d-flex flex-row align-items-center">
                            <div class="card-body text-center">
                                <p class="card-title fs-4 fw-bold" style="color: #FF7A00;">Masih kurang yakin dengan kemampuanmu?</p>
                                <p class="card-text">Dengan bergabung bersama Educatio kamu dapat mengukur dan menganalisis sejauh mana kemampuanmu.</p>
                                <a href="{{ route('login') }}" class="btn btn-submit">Mulai Tryout UTBK!</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('img/second-content.png') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-sm animate__animated animate__fadeInRight animate__delay-2s">
                <div class="card p-3 shadow-sm" style="width: 100%;">
                    <div class="row g-0 d-flex align-items-center">
                        <div class="col-md-4">
                            <img src="{{ asset('img/third-content.png') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 d-flex flex-row align-items-center">
                            <div class="card-body text-center">
                                <p class="card-title fs-4 fw-bold" style="color: #FF7A00;">Harga buku pembahasan UTBK sangat mahal?</p>
                                <p class="card-text">Dengan bergabung bersama Educatio kamu akan mendapatkan pembahasan tryout UTBK secara gratis yang dapat diakses melalui handphone maupun laptop kamu.</p>
                                <a href="{{ route('login') }}" class="btn btn-submit">Lihat pembahasan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection