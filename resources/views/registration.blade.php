@extends('layout.auth')

@section('title')
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
@endsection

@section('container')
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row g-3">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset('img/educatio-new.png') }}" alt="" style="max-width:70%;">
                <p class="img_title text-wrap fw-bold text-center">Jika kita tidak pernah mencoba, maka kita tidak akan pernah tau.</p>
                <p class="img_subtitle text-wrap fw-bold text-center">Coba berbagai macam Tryout UTBK Online dari Educatio</p>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center animate__animated animate__fadeInRight">
                <div class="card p-3 shadow" style="width: 100%;">
                    <div class="card-body">
                        <p class="card-title text-wrap" style="90%">Terus berlatih untuk dapat menjadi bagian dari universitas impianmu!</p>
                        <p class="card-subtitle mb-2 text-muted">Ayo bergabung dan berlatih bersama Educatio!</p>
                        
                        <form class="row g-3" action="{{ route('registration') }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="Nama_Lengkap" class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control @error('user_name') is-invalid @enderror" id="Nama_Lengkap" name="user_name" value="{{ old('user_name') }}">
                                @error('user_name')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="No_Handphone" class="form-label fw-bold">Phone Number</label>
                                <input type="text" class="form-control @error('user_phone') is-invalid @enderror" id="No_Handphone" name="user_phone" value="{{ old('user_phone') }}">
                                @error('user_phone')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="Email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control @error('user_email') is-invalid @enderror" id="Email" name="user_email" value="{{ old('user_email') }}">
                                @error('user_email')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="pass col d-flex">
                                <div class="col">
                                    <label for="Password" class="form-label fw-bold">Password</label>
                                    <input type="password" class="form-control @error('user_password') is-invalid @enderror" id="Password" name="user_password">
                                    @error('user_password')
                                        <div id="" class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="Konfirmasi_Password" class="form-label fw-bold">Confirm Password</label>
                                    <input type="password" class="form-control @error('konfirmasi_password') is-invalid @enderror" id="Konfirmasi_Password" name="konfirmasi_password">
                                    @error('konfirmasi_password')
                                        <div id="" class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <button type="submit" class="btn btn-submit">Sign Up</button>
                            </div>
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <p class="register_action">Sudah punya akun? <a class="link fw-bold" href="{{ route('login') }}">Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection