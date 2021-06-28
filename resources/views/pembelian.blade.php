@extends('layout.user')

@section('title')
    <title> Pembelian</title>
    <link rel="stylesheet" href="{{ asset('css/pembelian.css') }}">
@endsection

@section('pembelian', 'active')

@section('container')
    <div class="container-fluid">
        <div class="container-sm d-grid gap-3"> 
            <nav class="navbar navbar-expand-lg navbar-light p-2 shadow-sm" style="border-radius: 1.5rem; background-color: #FF7A00;">
                <div class="container d-flex">
                    <div class="d-flex flex-column">
                        <p class="card-title text-wrap fs-2 fw-bold text-white">Pembelian</p>
                    </div>
                    <!-- Example split danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('pembelian') }}">Daftar Paket</a></li>
                            <li><a class="dropdown-item" href="{{ route('riwayatPembelian') }}">Riwayat Pembelian</a></li>
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
                            @foreach ( $tryout as $try)
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <h5 class="card-header fw-bold">{{ $try->tryout_name }}</h5>
                                    <div class="card-body">
                                        @if ($try->tryout_price == 0)
                                        <p class="card-title fs-3 fw-bold">Free</p>
                                        @else
                                        <p class="card-title fs-3 fw-bold">Rp{{ $try->tryout_price }},-</p>
                                        @endif
                                            <form action="{{route('pembayaran')}}" method="get">
                                                @csrf
                                                <input type="hidden" name="tryoutid" value="{{$try->tryoutid}}">
                                                <button href="" type="submit" class="btn btn-submit">Beli</button>
                                            </form>
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $try->tryoutid }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Details
                                                        </button>
                                                    </h2>
                                                    <div id="collapse{{$try->tryoutid}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body text-start" style="background: rgba(0, 0, 0, 0.02); border-radius: 0 0 1.5rem 1.5rem;">
                                                            <p class="card-text">{!! $try->tryout_desc !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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