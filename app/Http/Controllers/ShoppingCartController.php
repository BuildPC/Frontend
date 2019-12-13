<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ShoppingCart(){
        $item_amount_array = [];
        $user_email = \Auth::user()->email;
        $basket_id = \DB::table('Basket')->where('username','=',$user_email)->max('basket_id');
        $BContains = \DB::table('BContains')->where('basket_id','=',$basket_id)->get();
        $item_id_array = [];
        foreach ($BContains as $ContainedItems) {
            array_push($item_id_array, $ContainedItems->item_id);
            array_push($item_amount_array, $ContainedItems->amount);
        }

        $items = \DB::table('Item')->whereIn('item_id',$item_id_array)->get();
        //dd(($items[1]));
        return view('shoppingCart',['items' =>$items,'amounts'=>$item_amount_array]);
    }
}
