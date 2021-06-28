
@extends('layout.admin')

@section('title')
    <title>Tambah Tryout</title>
    <link rel="stylesheet" href="{{ asset('css/tryout.css') }}">
@endsection

@section('tryout', 'active')

@section('container')
    <div class="container-fluid">
        <div class="container-sm d-grid gap-3"> 
            <nav class="navbar navbar-expand-lg navbar-light p-2 shadow-sm" style="border-radius: 1.5rem; background-color: #FF7A00;">
                <div class="container d-flex">
                    <div class="d-flex flex-column">
                        <p class="card-title text-wrap fs-2 fw-bold text-white">Tambah Tryout</p>
                    </div>
                    <!-- Example split danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('listTryout') }}">Data Tryout</a></li>
                            <li><a class="dropdown-item" href="{{ route('tryout') }}">Tambah Tryout</a></li>
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
                        <form class="row g-3" action="/tryout" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="Tryout_Name" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control @error('tryout_name') is-invalid @enderror" id="Tryout_Name" name="tryout_name" value="{{ old('tryout_name') }}">
                                @error('tryout_name')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="editor" class="form-label fw-bold">Description</label>
                                <textarea class="form-control @error('tryout_desc') is-invalid @enderror" aria-label="With textarea" id="editor" name="tryout_desc" >{{ old('tryout_desc') }}</textarea>
                                @error('tryout_desc')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="tryout_price" class="form-label fw-bold">Price</label>
                                <input type="text" class="form-control @error('tryout_price') is-invalid @enderror" id="tryout_price" name="tryout_price"  value="{{ old('tryout_price') }}">
                                @error('tryout_price')
                                    <div id="" class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mt-3 justify-content-center">
                                <div class="col-4 d-flex justify-content-center">
                                    <button type="reset" class="btn ">Reset</button>
                                    <button type="submit" class="btn btn-submit">Save Changes</button>
                                </div>
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

@section('ck-editor')
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection