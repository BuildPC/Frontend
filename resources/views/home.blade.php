{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            html, body {--}}
{{--                background-color: #fff;--}}
{{--                color: #636b6f;--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--                font-weight: 200;--}}
{{--                height: 100vh;--}}
{{--                margin: 0;--}}
{{--            }--}}

{{--            .full-height {--}}
{{--                height: 100vh;--}}
{{--            }--}}

{{--            .flex-center {--}}
{{--                align-items: center;--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .position-ref {--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .top-right {--}}
{{--                position: absolute;--}}
{{--                right: 10px;--}}
{{--                top: 18px;--}}
{{--            }--}}

{{--            .content {--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .title {--}}
{{--                font-size: 84px;--}}
{{--            }--}}

{{--            .links > a {--}}
{{--                color: #636b6f;--}}
{{--                padding: 0 25px;--}}
{{--                font-size: 13px;--}}
{{--                font-weight: 600;--}}
{{--                letter-spacing: .1rem;--}}
{{--                text-decoration: none;--}}
{{--                text-transform: uppercase;--}}
{{--            }--}}

{{--            .m-b-md {--}}
{{--                margin-bottom: 30px;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}
@extends("layouts.app")
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="data:image/jpeg;base64,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" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">AMD ThreadRipper 2990WX 32-core CPU</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="btn btn-primary">Go to Item Page</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <img src="http://static.techspot.com/images/products/2018/processors/intel/org/2018-10-19-product-2.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Intel Core i9 9900K CPU</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="btn btn-primary">Go to Item Page</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <img src="https://images.evga.com/products/gallery/11G-P4-2281-KR_XL_4.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">EVGA NVIDIA GTX 2080Ti Graphics Card</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="btn btn-primary">Go to Item Page</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="https://static.techspot.com/images/products/2018/motherboards/org/2018-11-14-product-5.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Asus ROG Z390-E Strix Gaming Motherboard</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="#" class="btn btn-primary">Go to Item Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
