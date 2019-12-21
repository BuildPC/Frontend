<?php

namespace Tests\Feature;

//use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testHomePage(){
        $response = $this->get('/home');
        $response ->assertStatus(200);
    }
    public function testCategory(){
        $response = $this->get('/category');
        $response ->assertStatus(200);
        $categoryCount = \DB::table('Category')->count();
        //print ($categoryCount);
        for($i = 0;$i<$categoryCount;$i++){
            $response = $this->get('/category/'.$i.'');
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
        $item_count = \DB::table('Item')->count();
        print ($item_count);

        for ($i = 2;$i<=$item_count+1;$i++){
            $response = $this->get('/item/'.$i.'');
            $response ->assertStatus(200);
        }
    }

}
