<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siteSetting extends Model
{
    protected $table = 'sitesetting';
    protected $fillable = ['name', 'description', 'email', 'fax', 'address', 'phones', 'site_image', 'testmonial_image', 'facebook', 'twitter', 'youtube', 'behance'];
}

