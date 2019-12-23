@extends("layouts.app")
@section('content')
    <div class="container pt-5">
        <div class="card-columns">
            @foreach ($items as $item)
                {{createItemCard($item)}}
            @endforeach
        </div>
    </div>
@endsection
