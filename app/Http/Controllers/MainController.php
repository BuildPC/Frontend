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
}
