<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testmonials extends Model
{
    protected $table = 'testmonials';
    protected $fillable = ['title', 'body', 'image'  , 'status'];
}
