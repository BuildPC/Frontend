@extends("layouts.app")
@section('content')
@php
    $basket_id = 0;
@endphp
@for($i=0;$i<count($items);++$i)
    @if($i==0)
        @php
        $basket_id = $items[$i]->basket_id
        @endphp
        {{$basket_id}}
    @endif
    @if($basket_id != $items[$i]->basket_id)
        @php
            $basket_id = $items[$i]->basket_id
        @endphp
        <h5>-------------</h5>
        {{$basket_id}}
    @endif
    <h4>{{$items[$i]->item_id}}</h4>
@endfor
@endsection
