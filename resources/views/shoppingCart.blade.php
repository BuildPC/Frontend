@extends("layouts.app")
@php
    $sum = 0;
@endphp
@section('content')
    <script>
        function trashBtnAction(item){
            let data = {
                item_id:item
            };
            $.ajax({
                type: 'POST',
                url: '/actions/remove',
                data: data,
                success: function(data) {location.reload() },
                error: function(data){alert(JSON.stringify(data))}
            })
        }
        function checkoutBtnAction() {
            $.ajax({
                type: 'POST',
                url: '/actions/checkout',
                data: {},
                success: function() {location.reload() },
                error: function(data){alert(JSON.stringify(data))}
            })

        }
    </script>
    <div class="pb-5">
        <div class="container sc_container">
            <div class="row sc_content">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Product</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Unit Price</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Total Price</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Amount</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @for($i = 0; $i < sizeof($items); $i++)
                                {{$sum = createBasketItemCard($items[$i],$amounts[$i],$sum)}}

                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    shopping page--}}
    </div>
    <div class="col-lg-6 m-md-auto">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
        <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>{{$sum}} ₺</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>{{number_format($sum * 0.2,2)}}₺</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>{{number_format($sum * 0.18,2)}}₺</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                    <h5 class="font-weight-bold">{{number_format($sum + $sum*0.2 + $sum * 0.18,2)}} ₺</h5>
                </li>
                @if($sum == 0)
                    </ul><button class="btn btn-danger rounded-pill py-2 btn-block disabled" onclick="">Proceed to checkout</button>
                @else
                </ul><button class="btn btn-dark rounded-pill py-2 btn-block" onclick="checkoutBtnAction()">Proceed to checkout</button>
                @endif
        </div>
    </div>
    </div>
@endsection
<!-- create a function like createItemCard in the Helpers -->
