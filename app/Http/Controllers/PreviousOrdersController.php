<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use DB;

class PreviousOrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PreviousOrders()
    {
//        $basket_idArray = [];
        $user_email = Auth::user()->email;
        $baskets = DB::table('History')->leftJoin('BContains', 'History.basket_id', '=', 'BContains.basket_id')
            ->leftJoin('Item','BContains.item_id','Item.item_id')
            ->select('History.basket_id','History.date', 'BContains.item_id','Item.item_name', 'BContains.amount','Item.price')
            ->where('History.username', '=', $user_email)
            ->get()->groupBy('basket_id')
            ->map(function ($group) {
                return $group->map(function ($value) {
                    return ["item_id" => $value->item_id,'item_name'=>$value->item_name, "amount" => $value->amount,"total_price" => number_format($value->amount*$value->price,2),
                        "date"=> Carbon::parse($value->date)->format('d/m/Y')];
                });
            });
            return view('previousOrder',['baskets'=>$baskets]);
    }
}
