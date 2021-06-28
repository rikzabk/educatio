
@extends('layout.admin')

@section('title')
    <title>Registrasi Admin</title>
    <link rel="stylesheet" href="{{ asset('css/addAdmin.css') }}">
@endsection

@section('listAdmin', 'active')

@section('container')
    <div class="container-fluid">
        <div class="container-sm d-grid gap-3"> 
            <nav class="navbar navbar-expand-lg navbar-light p-2 shadow-sm" style="border-radius: 1.5rem; background-color: #FF7A00;">
                <div class="container d-flex">
                    <div class="d-flex flex-column">
                        <p class="card-title text-wrap fs-2 fw-bold text-white">Registrasi Admin</p>
                    </div>
                    <!-- Example split danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('listAdmin') }}">Data Admin</a></li>
                            <li><a class="dropdown-item" href="{{ route('addAdmin') }}">Registrasi Admin</a></li>
                        </ul>
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
                        <form class="row g-3" action="/addAdmin" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="Nama_Lengkap" class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control @error('admin_name') is-invalid @enderror" id="Nama_Lengkap" name="admin_name" value="{{ old('admin_name') }}">
                                @error('admin_name')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="No_Handphone" class="form-label fw-bold">Phone Number</label>
                                <input type="text" class="form-control @error('admin_phone') is-invalid @enderror" id="No_Handphone" name="admin_phone"  value="{{ old('admin_phone') }}">
                                @error('admin_phone')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="Email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control @error('admin_email') is-invalid @enderror" id="Email" name="admin_email"  value="{{ old('admin_email') }}">
                                @error('admin_email')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="Password" class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control @error('admin_password') is-invalid @enderror" id="Password" name="admin_password">
                                @error('admin_password')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="Konfirmasi_Password" class="form-label fw-bold">Confirm Password</label>
                                <input type="password" class="form-control @error('konfirmasi_password') is-invalid @enderror" id="Konfirmasi_Password" name="konfirmasi_password">
                                @error('konfirmasi_password')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <button type="submit" class="btn btn-submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- endcardbody -->
                </div>
                <!-- endcard -->
            </div>
            <!-- endcontainercard -->
        </div>
        <!-- endcontainervp -->
    </div>
    <!-- endcontainer -->
@endsection