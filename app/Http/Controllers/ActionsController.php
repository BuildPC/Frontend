<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionsController extends Controller
{

    /**
     * ActionsController constructor.
     */
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function add(Request $request){
        $user = \Auth::user();
        $user_email = $user->email;
        $item_id = $request->input('item_id');
        $amount = $request->input('amount');
        \DB::select("call addBasket(?,?,?)",array($user_email,$item_id,$amount));

    }
}