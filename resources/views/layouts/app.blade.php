<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- TODO Have the below .js files served from static.buildpc.software --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
    <script src="https://unpkg.com/popper.js"></script>
    <script src="https://kit.fontawesome.com/1539a4ad66.js" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            @isset($sidebarToggler)
                @if($sidebarToggler == true)
                    <button class="mini-submenu nav-item btn"
                            onclick=document.getElementById('wrapper').classList.toggle('toggled')>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                @endif
            @endisset
            <a class="navbar-brand pl-5" href="{{ url('/') }}">
                {{--                    {{ config('app.name', 'Laravel') }}--}}
                BuildPC
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/category" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Motherboards</a>
                            <a class="dropdown-item" href="#">CPUs</a>
                            <a class="dropdown-item" href="#">GPUs</a>
                            <a class="dropdown-item" href="#">SSDs</a>
                            <a class="dropdown-item" href="#">Monitors</a>
                            <a class="dropdown-item" href="#">Coolers</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/category">More Categories...</a>
                        </div>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <!-- shopping cart icon -->
                        <li class="nav-item pt-2">
                            <i class="fas fa-shopping-cart"></i>
                        </li>

                        <!-- shopping cart link -->
                        <li class="nav-item">
                            <a class="nav-link" href="/shoppingCart">Shopping Cart <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('user') }}">{{ __('User') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="mt-2 mr-2 mb-2">
        @yield('content')
    </main>
</div>
{{--    init LazyLoad--}}
<script>
    async function loadLazy() {
        window.lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
            // ... more custom settings?
        });
        // console.log("lazy");
        lazyLoadInstance.update();
    }

    setTimeout(loadLazy, 1);

    // Set the options to make LazyLoad self-initialize

</script>
@include('layouts.footer')
</body>
</html>
