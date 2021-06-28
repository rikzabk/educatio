@extends('layout.auth')

@section('title')
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                        <p class="card-title text-wrap" style="width: 90%;">Selamat Datang Kembali!</p>
                        <p class="card-subtitle mb-2 text-muted">Silakan masuk dengan aku Educatio kamu ya!</p>

                        <form class="row g-3" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="Email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control @error('user_email') is-invalid @enderror" id="Email" name="user_email" value="{{ old('user_email') }}">
                                @error('user_email')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="Password" class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control @error('user_password') is-invalid @enderror" id="Password" name="user_password">
                                @error('user_password')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 d-flex flex-column align-items-end justify-content-center">
                                <a class="text-muted link" href="#">Lupa password?</a>
                            </div>
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <button type="submit" class="btn btn-submit">Sign In</button>
                            </div>
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <p class="register_action">Belum punya akun? <a class="link fw-bold" href="{{ route('registration') }}">Sign Up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection