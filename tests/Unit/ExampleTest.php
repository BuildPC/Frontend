<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    //TODO the following code wipes the DB everytime the test runs! ooops... See https://laracasts.com/discuss/channels/laravel/laravel-phpunit-drops-database-tables the link for how to do it properly.
//    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testCreateItemCard()
    {

        $items = \Illuminate\Support\Facades\DB::table("Item")->get();
        foreach ($items as $item) {
            $this->assertTrue(!$this->expectError(createItemCard($item)));
        }
    }
}
