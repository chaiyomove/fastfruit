<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
     protected $fillable = [
        'provinceName','provinceNameEng',
    ];

    protected $primaryKey = 'idProvince';
}
