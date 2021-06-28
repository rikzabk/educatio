@extends('layout.user')

@section('title')
    <title>Isi Saldo</title>
    <link rel="stylesheet" href="{{ asset('css/balance.css') }}">
@endsection

@section('profile', 'active')

@section('container')
    <div class="container-fluid vh-100">
        <div class="container-sm d-grid gap-3" style="max-width: 50%; margin: auto;"> 
            <nav class="navbar navbar-expand-lg navbar-light p-2 shadow-sm" style="border-radius: 1.5rem; background-color: #FF7A00;">
                <div class="container d-flex">
                    <div class="d-flex flex-column">
                        <p class="card-title text-wrap fs-2 fw-bold text-white">Isi Saldo</p>
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
                <div class="card p-3 shadow-sm">
                    <div class="card-body">
                        <form class="row g-3" action="/balance" method="POST">
                            @method('patch')
                            @csrf
                            <div class="mb-3 row">
                                <label for="staticName" class="col-sm-3 col-form-label fw-bold">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext" id="staticName" value="{{ $user->user_name }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label fw-bold">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $user->user_email }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticBalance" class="col-sm-3 col-form-label fw-bold"> Current Balance</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext" id="staticBalance" value="Rp{{ $balanceUser->balance }},-">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="balance" class="col-sm-3 form-label fw-bold">Top Up</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('balance') is-invalid @enderror" id="balance" name="balance">
                                    @error('balance')
                                        <div id="" class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
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