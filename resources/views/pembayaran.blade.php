@extends('layout.user')

@section('title')
    <title> Pembayaran</title>
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">
@endsection

@section('pembelian', 'active')

@section('container')
    <div class="container-fluid">
        <div class="container-sm d-grid gap-3"> 
            <nav class="navbar navbar-expand-lg navbar-light p-2 shadow-sm" style="border-radius: 1.5rem; background-color: #FF7A00;">
                <div class="container d-flex">
                    <div class="d-flex flex-column">
                        <p class="card-title text-wrap fs-2 fw-bold text-white">Pembayaran</p>
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
                            <div class="col-md-6">
                                <div class="card text-center">
                                    <h5 class="card-header fw-bold">Detail Pesanan</h5>
                                    <div class="card-body">
                                        <p class="card-title fs-3 fw-bold">{{ $tryout->tryout_name }}</p>
                                        @if ($tryout->tryout_price == 0)
                                        <p class="card-title fs-4">Free</p>
                                        @else
                                        <p class="card-title fs-3 fw-bold">Rp{{ $tryout->tryout_price }},-</p>
                                        @endif
                                        <div class="text-start d-flex justify-content-center">

                                            <p class="card-text text-start">{!! $tryout->tryout_desc !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card text-center">
                                    <h5 class="card-header fw-bold">Pembayaran</h5>
                                    <div class="card-body text-start">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Saldo</th>
                                                        <td>:</td>
                                                        <td class="text-end">Rp{{ $balance->balance }},-</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Harga</th>
                                                        <td>:</td>
                                                        <td class="text-end">-Rp{{ $tryout->tryout_price }},</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sisa Saldo</th>
                                                        <td>:</td>
                                                        <td class="text-end">Rp{{ $balanceRemain }},-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <form action="/pembayaran" method="POST">
                                            @csrf
                                            <input type="hidden" name="tryoutid" value="{{$tryout->tryoutid}}">
                                            <input type="hidden" name="balance" value="{{$balanceRemain}}">
                                            @if ($balanceRemain > 0 or $balanceRemain == 0)
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-submit">Beli</button>
                                            </div>
                                            @else
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-submit disabled">Saldo tidak mencukupi</button>
                                            </div>
                                            @endif
                                        </form>
                                    </div>
                                </div>
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