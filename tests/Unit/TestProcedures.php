<?php

namespace Tests\Unit;
namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use mysql_xdevapi\Statement;
use Tests\TestCase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use function GuzzleHttp\Promise\all;

class TestProcedures extends TestCase
{
    //TODO the following code wipes the DB everytime the test runs! ooops... See https://laracasts.com/discuss/channels/laravel/laravel-phpunit-drops-database-tables the link for how to do it properly.
//    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    /*public function testProcedure()
    {
       $this->assertTrue(true);
    }*/

    public function testAddBasket() // Checks method addBasket(adds item to basket)
    {
        DB::beginTransaction();

        $user = factory(User::class)->create(); // Test User
        //echo $user->email;

        $basket = \DB::table('Basket')->where('username', '=',$user->email)->orderBy('basket_id','desc')->first(); // Recent Basket
        //echo $basket->basket_id;

        $initial_table = \DB::table('BContains')->where('basket_id', '=',$basket->basket_id);
        $count = $initial_table->count('item_id');

        \DB::select('call addBasket(?,?,?)',array($user->email,"33","1"));

        $table = \DB::table('BContains')->where('basket_id', '=',$basket->basket_id);
        $this->assertTrue($count + 1 == $table->count('item_id'));

        DB::rollBack();
    }

    public function testPurchase() // Checks method purchaseBasket
    {
        DB::beginTransaction();

        $user = factory(User::class)->create(); // Test User
        $basket = \DB::table('Basket')->where('username', '=',$user->email)->orderBy('basket_id','desc')->first(); // Recent Basket

        \DB::select('call purchaseBasket(?)',array($user->email));
        $user = \DB::table('History')->where('basket_id', $basket->basket_id)->first();
        $this->assertTrue($basket->basket_id == $user->basket_id);

        DB::rollBack();
    }
}
