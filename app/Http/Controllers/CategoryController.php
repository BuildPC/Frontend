<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //TODO Missing Category Details in DB.
    public function getItems($category_id = 0){
        $items = \DB::connection('mysql2')->table('Item')->where('category','=',$category_id)->get();
//        dd($items);
        return view('categories',['category'=>$category_id,'items' => $items]);
    }
}
