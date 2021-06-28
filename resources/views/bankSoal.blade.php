@extends('layout.user')

@section('title')
    <title>Bank Soal</title>
    <link rel="stylesheet" href="{{ asset('css/bankSoal.css') }}">
@endsection

@section('bankSoal', 'active')

@section('container')
    <div class="container-fluid">
        <div class="container-sm d-grid gap-3"> 
            <nav class="navbar navbar-expand-lg navbar-light p-2 shadow-sm" style="border-radius: 1.5rem; background-color: #FF7A00;">
                <div class="container d-flex">
                    <div class="d-flex flex-column">
                        <p class="card-title text-wrap fs-2 fw-bold text-white">Bank Soal</p>
                    </div>
                    <!-- Example split danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('bankSoal') }}">Bank Soal</a></li>
                            <li><a class="dropdown-item" href="{{ route('maintenance') }}">Riwayat Tryout</a></li>
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
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ( $transaction as $trans)
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <h5 class="card-header fw-bold">{{ $trans->tryout->tryout_name }}</h5>
                                    <div class="card-body">
                                        <div class="text-start d-flex justify-content-center">
                                            <p class="card-text">{!! $trans->tryout->tryout_desc !!}</p>
                                        </div>
                                        <a href="{{ route('maintenance') }}" class="btn btn-submit">Attempt</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
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