<?php

namespace App\Http\Controllers\website;

use App\siteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    public function index(){
        $contacts = siteSetting::all();
        return view('website/contact' , compact('contacts'));
    }
}
