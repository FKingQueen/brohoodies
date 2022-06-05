<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BroHoodies') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    .main-img {
        background: url('background.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
    }
    </style>
    @yield('css')
</head>
<body>
    <div id="app"  class="main-img">
        <nav  class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand fw-bolder" href="{{ url('/') }}" style="opacity: 100%; font-family: arial; color: yellow; font-size: 1.8vw;" >
                    Bro'Hoodies
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">


                    @guest

                    @else
                        <div class="w-100 justify-content-around d-flex">
                            <a class="nav-link text-light fw-bold" href="#" style="font-size: 1.2vw;">
                                {{ __('HOME') }}
                            </a>
                            <a class="nav-link text-light fw-bold" href="#" style="font-size: 1.2vw;">
                                {{ __('ABOUT') }}
                            </a>
                            <a class="nav-link text-light fw-bold" href="#" style="font-size: 1.2vw;">
                                {{ __('DESIGN') }}
                            </a>
                            <a class="nav-link text-light fw-bold" href="#" style="font-size: 1.2vw;">
                                {{ __('PRICING') }}
                            </a>
                            <a class="nav-link text-light fw-bold" href="#" style="font-size: 1.2vw;">
                                {{ __('CONTACT') }}
                            </a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle  text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 1.2vw;">
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                        </ul>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
