<?php

namespace App\Http\Controllers\website;

use App\build;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class allRealStatesController extends Controller
{
    public function index(){
        $all_realstates = build::orderBy('id' , 'DESC')->paginate(6);
        return view('website/all_realstates' , compact('all_realstates'));
    }
}
