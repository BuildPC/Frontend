<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
////        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = \DB::connection('mysql2')->table('Item')->get();
//        dd($items);
        return view('home',['items' =>$items]);
    }
    public function ShoppingCart(){
        $user_email = \Auth::user()->email;
        $basket_id = \DB::table('Basket')->where('username','=',$user_email)->max('basket_id');
        $items = \DB::table('BContains')->where('basket_id','=',$basket_id)->get();

//        dd($items);
        return view('shoppingCart',['items' =>$items]);
    }
}
