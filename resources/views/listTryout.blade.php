
@extends('layout.admin')

@section('title')
    <title>Data Tryout</title>
    <link rel="stylesheet" href="{{ asset('css/listTryout.css') }}">
@endsection

@section('tryout', 'active')

@section('container')
    <div class="container-fluid">
        <div class="container-sm d-grid gap-3"> 
            <nav class="navbar navbar-expand-lg navbar-light p-2 shadow-sm" style="border-radius: 1.5rem; background-color: #FF7A00;">
                <div class="container d-flex">
                    <div class="d-flex flex-column">
                        <p class="card-title text-wrap fs-2 fw-bold text-white">Data Tryout</p>
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 2rem;">TryoutID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Creator</th>
                                        <th scope="col" style="width: 5rem;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $tryout as $try )
                                    <tr>
                                        <th scope="row" class="text-center">{{ $try->tryoutid }}</th>
                                        <td>{{ $try->tryout_name }}</td>
                                        <td>Rp{{ $try->tryout_price }},-</td>
                                        <td>{{ $try->admin->admin_name }}</td>
                                        <td class="d-flex">
                                            <button type="button" class="btn view" data-bs-toggle="modal" data-bs-target="#viewProfileModal{{ $try->tryoutid }}" title="View Profile" style="color: #0496ff;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                                                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $try->tryoutid }}" title="View Profile" style="color: #519872;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="btn delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $try->tryoutid }}" title="View Profile" style="color: #e4572e;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
   
    <!-- Modal View -->
    @foreach( $tryout as $try )
    <div class="modal fade" id="viewProfileModal{{ $try->tryoutid }}" tabindex="-1" aria-labelledby="viewProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="border-radius:1.5rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewProfileModalLabel">Tryout Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">TryoutID</th>
                                    <td>:</td>
                                    <td>{{ $try->tryoutid }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>:</td>
                                    <td>{{ $try->tryout_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td>:</td>
                                    <td>{!! $try->tryout_desc !!}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Price</th>
                                    <td>:</td>
                                    <td>Rp{{ $try->tryout_price }},-</td>
                                </tr>
                                <tr>
                                    <th scope="row">Creator</th>
                                    <td>:</td>
                                    <td>{{ $try->admin->admin_name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    <!-- Modal Edit -->
    @foreach( $tryout as $try )
    <div class="modal fade" id="editModal{{ $try->tryoutid }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="border-radius:1.5rem;">
                <form method="POST" action="/listTryout/{{ $try->tryoutid }}">
                    @method('patch')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Tryout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12">
                            <label for="Nama_Lengkap" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control @error('tryout_name') is-invalid @enderror" id="Nama_Lengkap" name="tryout_name" value="{{ $try->tryout_name }}">
                            @error('tryout_name')
                                <div id="" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="editor" class="form-label fw-bold">Description</label>
                            <textarea class="form-control @error('tryout_desc') is-invalid @enderror" aria-label="With textarea" id="editor" name="tryout_desc" >{{ $try->tryout_desc }}</textarea>
                            @error('tryout_desc')
                                <div id="" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>				
                        <div class="col-12">
                            <label for="Price" class="form-label fw-bold">Price</label>
                            <input type="text" class="form-control @error('tryout_price') is-invalid @enderror" id="Price" name="tryout_price" value="{{ $try->tryout_price }}">
                            @error('tryout_price')
                                <div id="" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>				
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    
    <!-- Modal Delete -->
    @foreach( $tryout as $try )
    <div class="modal fade" id="deleteModal{{ $try->tryoutid }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="border-radius:1.5rem;">
                <form method="POST" action="/listTryout/{{ $try->tryoutid }}">
                    @method('delete')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Tryout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">					
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete Tryout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
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