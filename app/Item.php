<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model{

    protected $primaryKey = "item_id";
    protected $connection = "mysql2";
}
