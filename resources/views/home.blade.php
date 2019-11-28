@extends("layouts.app")
@section('content')
    <div class="container pt-5">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-3">
                    <div class="card">
                        <img src="{{$item->photo}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->item_name}}</h5>
                            <p class="card-text">{{$item->item_desc}}</p>
                            <a href="/item/{{$item->item_id}}" class="btn btn-primary">Go to Item Page</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
