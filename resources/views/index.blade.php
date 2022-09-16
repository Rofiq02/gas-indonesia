<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gas Indonesis') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-bg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('asset/images/logo-gas.png') }}" class="navbar-logo" alt="company logo">
                    <span class="text-logo">GAS</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mx-auto navbar__custom">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Tentang GAS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Fitur
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Daftar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Karir
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item me-4 align-self-center">
                           <button type="button" class="btn btn-outline-white ps-4 pe-4">
                               sign in
                           </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-circle text-left">
                                akun toko
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="home__title">
                            Bergabung dengan GAS
                        </div>
                        <div class="home__subtitle">
                            Aplikasi Gas akan membantumu dalam memantau stok produk tokomu dan menjangkau customer yang lebih luas
                        </div>
                        <div class="home__playstore">
                            <div class="text-download">
                                Unduh
                            </div>
                            <a href="https://play.google.com/store/apps/details?id=id.gas.app" target="_blank">
                                <img src="{{ asset('asset/images/playstore.png') }}" alt="playstore logo">
                            </a>
                        </div>
                        <div class="home__social-media">
                            <a href="https://www.instagram.com/aplikasigas/?hl=id" target="_blank" class="btn-circle me-2">
                                <i class="fa-brands fa-instagram fa-2x"></i>
                            </a>
                            <a href="https://www.facebook.com/aplikasigas" target="_blank" class="btn-circle">
                                <i class="fa-brands fa-facebook-f fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 d-flex justify-content-end">
                        <img src="{{ asset('asset/images/home-illustration.png') }}" class="home__illustration" alt="home illustration">
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
