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
        foreach ($items as $item){
            $this->assertNull(createBasketItemCard($item,1,0));
        }
    }

}
