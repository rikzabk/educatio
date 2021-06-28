<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="script.js"></script>
    @yield('title')
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-body p-2 shadow-sm">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="" style="height:50%;">
                <img src="{{ asset('img/logo-educatio.png') }}" alt="" width="70%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @yield('question') fw-bold" aria-current="page" href="{{ route('maintenance') }}">Pengaturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('tryout') fw-bold" aria-current="page" href="{{ route('listTryout') }}">Data Tryout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('listAdmin') fw-bold" aria-current="page" href="{{ route('listAdmin') }}">Data Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('listUser') fw-bold" aria-current="page" href="{{ route('listUser') }}">Data Siswa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button type="button" class="btn profile " id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="color:#ff7a00;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item @yield('profileAdmin')" href="{{ route('profileAdmin') }}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logoutAdmin') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('container')
    @yield('ck-editor')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>