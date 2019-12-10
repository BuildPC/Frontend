<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    /**
     * @param int $category_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    //TODO create models for items and query from there instead of manually doing it!
    public function getItems($category_id = 0){
        $category = \DB::connection('mysql2')->table("Category")->where('category','=',$category_id)->first();
        $items = \DB::connection('mysql2')->table('Item')->where('category','=',$category_id)->get();

        $categories_details = $this->getCategoriesItemCount();
        return view('categories',['category'=>$category,'items' => $items,'categories_details'=>$categories_details]);
    }

    /**
     * @return array
     */
    private function getCategoriesItemCount(){
        $resultSet = [];

        $categories = \DB::connection('mysql2')->table("Category")->get();
        foreach ($categories as $category){
            $items_count = \DB::connection('mysql2')->table("Item")->where('category','=',$category->category)->count();
            array_push($resultSet,new Category($category->category,$category->category_name,$items_count));
        }
        return $resultSet;
    }
}
class Category{
    public $id;
    public $name;
    public $amount;

    /**
     * Category constructor.
     * @param $id
     * @param $name
     * @param $amount
     */
    public function __construct($id, $name, $amount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->amount = $amount;
    }
}
