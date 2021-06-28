@extends('layout.user')

@section('title')
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('profile', 'active')

@section('container')
    <div class="container-fluid vh-100">
        <div class="container-sm d-grid gap-3"> 
            <nav class="navbar navbar-expand-lg navbar-light p-2 shadow-sm" style="border-radius: 1.5rem; background-color: #FF7A00;">
                <div class="container d-flex">
                    <div class="d-flex flex-column">
                        <p class="card-title text-wrap fs-2 fw-bold text-white">Profile</p>
                    </div>
                </div>
            </nav>

            @if (session('status'))
                <div class="container-sm">
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 1.5rem; border-color: none;">
                        <strong>{{ session('status') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            <div class="container-sm">
                <div class="card p-3 shadow-sm" style="width: 100%;">
                    <div class="card-body">
                        <form class="row g-3" action="/profile/{{ $user->userid }}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="col-md-6">
                                <label for="Nama_Lengkap" class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control @error('user_name') is-invalid @enderror" id="Nama_Lengkap" name="user_name" value="{{ $user->user_name }}">
                                @error('user_name')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="No_Handphone" class="form-label fw-bold">Phone Number</label>
                                <input type="text" class="form-control @error('user_phone') is-invalid @enderror" id="No_Handphone" name="user_phone" value="0{{ $user->user_phone }}">
                                @error('user_phone')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label fw-bold">Date of Birth</label>
                                <input type="date" class="form-control @error('user_dob') is-invalid @enderror" id="dob" name="user_dob" value="{{ $user->user_dob }}">
                                @error('user_dob')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="Email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control @error('user_email') is-invalid @enderror" id="Email" name="user_email" value="{{ $user->user_email }}">
                                @error('user_email')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="Alamat" class="form-label fw-bold">Address</label>
                                <input type="text" class="form-control @error('user_address') is-invalid @enderror" id="Alamat" name="user_address" value="{{ $user->user_address }}">
                                @error('user_address')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <button type="submit" class="btn btn-submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection