@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <h1 class="text-center font-weight-bolder pb-2" style="color:#5d561b">{{$item->item_name}}</h1>
        <div class="row">
            <div class="col-6">
{{--                //TODO see below line and remove hardcoded linking!--}}
                <img class="rounded-circle" style="height: 500px;width: auto" src="https://test.buildpc.software/photos/{{$item->photo}}">
            </div>
            <div class="col-6">
                <div class="text-center">
                    <h2 class="font-weight-bold pb-2" style="color:#2a9055;">&#x20BA {{$item->price}}</h2>
                    @guest
{{--                        TODO delay not working FIX!--}}
                        <button class="btn btn-primary"id="addBtn" data-toggle="popover" data-trigger="click" title="Error!" data-delay-hide="2500" data-content="You must first sign in." onclick="$('#addBtn').addClass('btn-danger').attr('disabled',true)">Add to Basket</button>
                    @else
                        <button class="btn btn-primary" id="addBtn" data-toggle="popover" data-trigger="focus" title="Success!" data-content="Item successfully added to your basket!." onclick="$('#addBtn').addClass('btn-success')">Add to Basket</button>
                    @endguest
                    <p class="pt-5 font-weight-bold" style="font-size: large">{{$item->item_desc}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
