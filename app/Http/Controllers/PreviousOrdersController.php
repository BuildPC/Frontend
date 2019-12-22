<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreviousOrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function PreviousOrders(){
        $basket_idArray = [];
        $dummy_Array = [];
        $user_email = \Auth::user()->email;
        $basket_ids = \DB::table('History')->select('basket_id')->where('username','=',$user_email)->get();
        foreach ($basket_ids as $basket_id){
            array_push($basket_idArray,$basket_id->basket_id);
        }

        $items_baskets = \DB::table('BContains')->select(array('basket_id','item_id'))->whereIn('basket_id',$basket_idArray)->groupBy('basket_id','item_id')->get();
//        foreach ($items_baskets as $basket_id){
//           foreach ($basket_id->item_id as $item){
//               $dummy_Array[$basket_id] = [$item];
//            }
//        }

//        $basket_idsraw = \DB::table('Basket')->where('username' ,'=',$user_email)->get();
//        $basket_ids = \DB::table('History')->whereIn('basket_id',$basket_idsraw)->get();
//        $user_baskets = \DB::table('BContains')->whereIn('basket_id',$basket_ids);
//        dd($items_baskets);
        return view('previousOrder',['items'=>$items_baskets]);
    }
}
