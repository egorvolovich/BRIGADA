<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ConcertBy</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('libs/jquery.js') }}" defer></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand logo" href="{{ url('/') }}">
                   Concert By
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a class="link" href="/">Главная</a></li>
                        <li><a class="link" href="{{route('tickets')}}">Билеты</a></li>
                        <li><a class="link" href="{{route('contacts')}}">Контакты</a></li>
                        <li><a class="link" href="{{route('aboutUs')}}">О нас</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                            </div>
                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a  class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </div>
                            @endif
                        @else
                            <div style="display: flex;
    justify-content: center;
    align-items: center;" >
                                <a href="{{route('cabinet')}}" style="text-decoration: none; color: #00CED1; margin-right: 10px;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div  >
                                    <a   href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                        @endguest

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="footer">

        <div class="footer-nav">
            <a href="{{route('cabinet')}}" class="footer-nav__link">МОЙ АККАУНТ</a>
            <a href="{{route('aboutUs')}}" class="footer-nav__link">О НАС</a>
            <a href="{{route('tickets')}}" class="footer-nav__link">БИЛЕТЫ</a>
        </div>

        <div class="footer__social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-vk"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="footer__copyright">Copyright © 2020. All Rights Reserved. Designed by Brigada 2</div>


        <script src="{{ asset('js/main.js') }}" defer></script>

    </div>
</body>
</html>
