<?php

namespace Tests\Feature;

//use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class RoutesTest extends TestCase
{
    public function testHomePage(){
        $response = $this->get('/home');
        $response ->assertStatus(200);
    }
    public function testCategory(){
        $categories = \DB::table('Category')->get();
        foreach ($categories as $category){
            $category_id = $category->category;
            $response = $this->get('/category/'.$category_id.'');
            $response->assertStatus(200);
        }
    }
    public function testUserPage(){
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
                        ->get('/user');
        $response->assertStatus(200);
    }
    public function testLoginPage(){
        $response = $this->get('/login');
        $response ->assertStatus(200);
    }
    public function testRegisterPage(){
        $response = $this->get('/register');
        $response ->assertStatus(200);
    }
    public function testShoppingCart(){
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get('/shoppingCart');
        $response->assertStatus(200);
    }
    public function testItemPages(){
        $items = \DB::table('Item')->get();
        foreach ($items as $item){
            $item_id = $item->item_id;
            $response = $this->get('/item/'.$item_id.'');
            $response ->assertStatus(200);
        }
    }

}
