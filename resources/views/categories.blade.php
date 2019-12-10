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
                        <span href="#" class="list-group-item sidebar-heading">Categories</span>
                            @foreach($categories_details as $category_detail)
                                @if($category_detail->id == $category->category)
                                <a href="/category/{{$category_detail->id}}" class="list-group-item list-group-item-action active">
                                    <i class="fa fa-bar-chart-o list-group-item-action"></i> {{$category_detail->name}} <span class="badge">{{$category_detail->amount}}</span>
                                </a>
                                @else
                                    <a href="/category/{{$category_detail->id}}" class="list-group-item list-group-item-action">
                                        <i class="fa fa-bar-chart-o list-group-item-action"></i> {{$category_detail->name}} <span class="badge">{{$category_detail->amount}}</span>
                                    </a>
                                @endif
                            @endforeach
                    </div>
                </div>
            </div>

        {{--TODO ADD a way to navigate thru categories easily by like iframing the clicked page without reloading or redirecting the user.--}}

        {{-- selected categorie items HERE! --}}
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1 class="mt-2 font-weight-bold text-center" style="font-size: 200%">{{$category->category_name}}</h1>
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
