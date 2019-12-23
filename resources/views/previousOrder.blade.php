@extends("layouts.app")
@section('content')
    <div class="container pt-5">
        @foreach($baskets as $basket)
            <div>
            <h4 class="align-content-center pt-2">Basket bought
                on: {{$basket[0]['date']}} Items: {{count($basket)}} Total Price: {{number_format(array_sum_r('total_price',(array)$basket)*1.38,2)}}&#x20BA</h4>
                <h5 class="font-weight-light font-italic small">**Total price includes tax and shipping!**</h5>
            </div>
            <div class="border-bottom mb-2">
                @foreach($basket as $item)
                    <div class="pb-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="https://static.buildpc.software/photos/{{$item['item_id']}}.jpg"
                                         class="img-fluid" style="display: block;max-width: 200px;height: auto;" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2">
                                        <h4 class="card-title mt-2">{{$item['item_name']}}</h4>
                                        <div class="card-text">
                                            <p class="align-content-end">Total of: {{$item['amount']}} piece(s)</p>
                                            <p class="font-weight-bold" style="color:green">{{$item['total_price']}}
                                                &#x20BA</p>
                                        </div>
                                        <a href="/item/{{$item['item_id']}}" class="btn btn-primary">Go to Item
                                            Page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer w-100 text-muted">
                                CS320 Project | Build a PC ©
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
