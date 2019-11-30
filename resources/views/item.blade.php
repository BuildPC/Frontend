@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <h1 class="text-center font-weight-bolder pb-2" style="color:#5d561b">{{$item->item_name}}</h1>
        <div class="row">
            <div class="col-6">
                <img class="rounded-circle" style="height: 500px;width: auto" src="{{$item->photo}}">
            </div>
            <div class="col-6">
                <div class="text-center">
                    <h2 class="font-weight-bold pb-2" style="color:#2a9055;">&#x20BA {{$item->price}}</h2>
                    @guest
                        <buton class="btn btn-primary" onclick='alert("you need to sign in")'>Add to Basket</buton>
                    @else
                        <buton class="btn btn-primary" onclick='alert("added")'>Add to Basket</buton>
                    @endguest
                    <p class="pt-5 font-weight-bold" style="font-size: large">{{$item->item_desc}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
