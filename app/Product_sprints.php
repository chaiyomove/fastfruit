<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_sprints extends Model
{
   protected $fillable = [
        'description','fruitNum', 'picture', 'fruitSpecie',
    ];

}
