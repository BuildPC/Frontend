<?php

namespace Tests\Unit;
namespace App\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use mysql_xdevapi\Statement;
use Tests\TestCase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class TestC extends TestCase
{
    //TODO the following code wipes the DB everytime the test runs! ooops... See https://laracasts.com/discuss/channels/laravel/laravel-phpunit-drops-database-tables the link for how to do it properly.
//    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testC()
    {
       $this->assertTrue(true);
    }

    public function testAddBasket() // Checks method addBasket(adds item to basket)
    {
        DB::beginTransaction();

        $initial_table = \DB::table('BContains')->where('basket_id', '=',12);
        $this->assertTrue("1" == $initial_table->count('item_id'));

        \DB::select('call addBasket(?,?,?)',array("test.user@ozu.edu.tr","33","1"));

        $table = \DB::table('BContains')->where('basket_id', '=',12);
        $this->assertTrue("2" == $table->count('item_id'));

        DB::rollBack();
    }

    public function testPurchase() // Checks method purchaseBasket
    {
        DB::beginTransaction();
        \DB::select('call purchaseBasket(?)',array("test.user@ozu.edu.tr"));
        $user = \DB::table('History')->where('basket_id', '12')->first();
        $this->assertTrue("12" == $user->basket_id);
        DB::rollBack();
    }
}
