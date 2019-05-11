<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class build extends Model
{
    protected $table = 'build';
    protected $fillable = [
        'name', 'price', 'image' , 'rent', 'square', 'type' , 'long_desc', 'place', 'status', 'rooms', 'user_id' , 'bathroom' ,
        'user_name' , 'email' , 'phone' , 'address' , 'zip', 'more_images'
    ];
}
