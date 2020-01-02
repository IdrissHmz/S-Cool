<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SCOOL') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <style>
        nav {
            display: flex;
            background: #fff5d7;
        }
        nav .container a{
            display: inline;
        }
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .light-blue-bg {
            background: lightblue;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .header {
            position: relative;
            top: 0;
            width: 100vw;
            height: 100px;
            align-items: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 29px;
            top: 38px;
        }

        .navbar-brand {
            text-decoration: none;
            position: relative;
            top: 34px; left:150px; font-size: 23px;
            color: black;
        }

        li {
            list-style: none;
        }
        li a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .v-text-field input {
            font-size: 1.2em;
        }
        .dashboard-grid{
            display: grid;
            grid-template-columns: 20% auto;
            grid-template-rows: 10vh auto;
            grid-template-areas:
                "head head"
                "sideBar main";
        }
        .dashboard-main {
            grid: 'main';
            padding: 100px;
        }
        .dashboard-sideBar {
            grid: 'sideBar';
            padding-top: 100px;

        }
    </style>
</head>
<body>
    <div id="app">


            <div class=" header light-blue-bg">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'SCOOL') }}
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto top-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

        <main class="py-4">
                @yield('content')
        </main>



    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
