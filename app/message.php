<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table = 'messages';
    protected $fillable = ['name', 'email', 'subject', 'message'];

}
