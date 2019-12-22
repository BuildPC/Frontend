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
    public function remove(Request $request){
        $user = \Auth::user();
        $user_email = $user->email;
        $item_id = $request->input('item_id');
        \DB::select("call removeFromBasket(?,?)",array($user_email,$item_id));
    }
    public function checkout(Request $request)
    {
        $user = \Auth::user();
        $user_email = $user->email;
        \DB::select("call purchaseBasket(?)", array($user_email));
    }
    public function changePassword(Request $request){

        if (!(\Hash::check($request->get('current-password'), \Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = \Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");
    }
}
