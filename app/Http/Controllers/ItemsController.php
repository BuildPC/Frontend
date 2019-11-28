<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index($item_id){
        //DB::table('users')->select('name', 'email as user_email')->get();
        $item = \DB::connection('mysql2')->table('Item')->where('item_id',$item_id)->first();
//        dd($item);
        return view('item',['item' => $item]);
    }
}
