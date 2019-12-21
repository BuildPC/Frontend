@extends("layouts.app")
@section('content')
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
                                {{createBasketItemCard($items[$i],$amounts[$i])}}

                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row-columns">

            {{--            @foreach($items as $item)--}}


            {{--             @endforeach--}}
        </div>
    </div>
@endsection
<!-- create a function like createItemCard in the Helpers -->
