@extends('layouts.app')
@section('content')
    {{-- sidebar of categories HERE! --}}
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar-button-wrapper">
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Categories</div>
                <div class="list-group list-group-flush">
                    <a href="/category/0" class="list-group-item list-group-item-action bg-light">Motherboards</a>
                    <a href="/category/1" class="list-group-item list-group-item-action bg-light">CPUs</a>
                    <a href="/category/2" class="list-group-item list-group-item-action bg-light">GPUs</a>
                    <a href="/category/3" class="list-group-item list-group-item-action bg-light">SSDs</a>
                    <a href="/category/4" class="list-group-item list-group-item-action bg-light">Monitors</a>
                    <a href="/category/5" class="list-group-item list-group-item-action bg-light">...</a>
                </div>
            </div>
            <button class="align-self-end small btn"
                    onclick=document.getElementById('wrapper').classList.toggle('toggled')>>
            </button> {{--TODO Fix later!--}}
        </div>

    {{--TODO ADD a way to navigate thru categories easily by like iframing the clicked page without reloading or redirecting the user.--}}
    <!-- /#page-content-wrapper -->


        <!-- Menu Toggle Script -->
        {{--<script>--}}
        {{--    $("#menu-toggle").click(function(e) {--}}
        {{--        e.preventDefault();--}}
        {{--        $("#wrapper").toggleClass("toggled");--}}
        {{--    });--}}
        {{--</script>--}}



        {{-- selected categorie items HERE! --}}
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1 class="mt-4"></h1>
                <div class="row">

                {{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--            <span class="navbar-toggler-icon"></span>--}}
                {{--        </button>--}}
                {{--        <button class="btn btn-primary" id="menu-toggle" onclick=document.getElementById('wrapper').classList.toggle('toggled')>Toggle Menu</button>--}}

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
