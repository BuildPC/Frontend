@php
    $sidebarToggler = true;
@endphp
@extends('layouts.app')
@section('content')
    {{-- sidebar of categories HERE! --}}
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar-button-wrapper">
                <div class="bg-light border-right" id="sidebar-wrapper">
                    <div class="list-group list-group-flush">
{{--                        TODO when a category is selected from the sidebar, update the contents accordingly! no page refresh, and highlight the selected category--}}
                        <span href="#" class="list-group-item active sidebar-heading">Categories</span>
                        <a href="/category/0" class="list-group-item list-group-item-action">
                            <i class="fa fa-comment-o"></i> Motherboards
                        </a>
                        <a href="/category/1" class="list-group-item list-group-item-action">
                            <i class="fa fa-search"></i> CPUs
                        </a>
                        <a href="/category/2" class="list-group-item list-group-item-action">
                            <i class="fa fa-user"></i> GPUs
                        </a>
                        <a href="/category/3" class="list-group-item list-group-item-action">
                            <i class="fa fa-folder-open-o"></i> SSDs <span class="badge">14</span>
                        </a>
                        <a href="/category/4" class="list-group-item list-group-item-action">
                            <i class="fa fa-bar-chart-o list-group-item-action"></i> Monitors <span class="badge">14</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fa fa-envelope"></i> ...
                        </a>
                    </div>
                </div>


                {{--                        <div class="sidebar-heading">Categories</div>--}}
                {{--                        <div class="list-group list-group-flush">--}}
                {{--                            <a href="/category/0" class="list-group-item list-group-item-action bg-light">Motherboards</a>--}}
                {{--                            <a href="/category/1" class="list-group-item list-group-item-action bg-light">CPUs</a>--}}
                {{--                            <a href="/category/2" class="list-group-item list-group-item-action bg-light">GPUs</a>--}}
                {{--                            <a href="/category/3" class="list-group-item list-group-item-action bg-light">SSDs</a>--}}
                {{--                            <a href="/category/4" class="list-group-item list-group-item-action bg-light">Monitors</a>--}}
                {{--                            <a href="/category/5" class="list-group-item list-group-item-action bg-light">...</a>--}}
                {{--                        </div>--}}
            </div>

        {{--TODO ADD a way to navigate thru categories easily by like iframing the clicked page without reloading or redirecting the user.--}}

        {{-- selected categorie items HERE! --}}
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1 class="mt-2 font-weight-bold text-center" style="font-size: 200%">Category name placeholder</h1>
                <div class="card-columns">
                    {{--        <div class="container-fluid">--}}
                    {{--            <h1 class="mt-4">Simple Sidebar</h1>--}}
                    {{--            <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>--}}
                    {{--            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>--}}
                    {{--        </div>--}}

                    @foreach($items as $item)
                        {{createItemCard($item)}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
