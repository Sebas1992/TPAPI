<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = ['id', 'brand', 'model', 'sku'];

    public $timestamps = false;
}
