<?php

namespace Tests\Unit;

use Tests\TestCase;
use function foo\func;


class helpersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testExample(){
        $this->assertTrue(true);
    }



    public function testCreateItemCard(){
        $this->setOutputCallback(function(){});
        $items =\DB::table("Item")->get();
        foreach ($items as $item){
            $this->assertNull(createItemCard($item));
        }
    }

    public function testCreateBasketItemCard(){
        $this->setOutputCallback(function(){});
        $items =\DB::table("Item")->get();
        $sum = \DB::table('Item')->sum('price');
        $tmp = 0;
        foreach ($items as $item){
            $tmp = createBasketItemCard($item,1,$tmp);
        }
        $this->assertTrue(number_format($sum,2) == number_format($tmp,2));
    }

}
