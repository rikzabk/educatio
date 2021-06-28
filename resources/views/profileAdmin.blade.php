@extends('layout.admin')

@section('title')
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profileAdmin.css') }}">
@endsection

@section('profileAdmin', 'active')

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
                        <form class="row g-3" action="/profileAdmin/{{ $admin->adminid }}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="col-md-6">
                                <label for="Nama_Lengkap" class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control @error('admin_name') is-invalid @enderror" id="Nama_Lengkap" name="admin_name" value="{{ $admin->admin_name }}">
                                @error('admin_name')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="No_Handphone" class="form-label fw-bold">Phone Number</label>
                                <input type="text" class="form-control @error('admin_phone') is-invalid @enderror" id="No_Handphone" name="admin_phone" value="0{{ $admin->admin_phone }}">
                                @error('admin_phone')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label fw-bold">Date of Birth</label>
                                <input type="date" class="form-control @error('admin_dob') is-invalid @enderror" id="dob" name="admin_dob" value="{{ $admin->admin_dob }}">
                                @error('admin_dob')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="Email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control @error('admin_email') is-invalid @enderror" id="Email" name="admin_email" value="{{ $admin->admin_email }}">
                                @error('admin_email')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="Alamat" class="form-label fw-bold">Address</label>
                                <input type="text" class="form-control @error('admin_address') is-invalid @enderror" id="Alamat" name="admin_address" value="{{ $admin->admin_address }}">
                                @error('admin_address')
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