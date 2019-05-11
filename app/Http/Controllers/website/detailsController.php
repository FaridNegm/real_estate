<?php

namespace App\Http\Controllers\website;
use App\build;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class detailsController extends Controller
{
    public function index($id , $price){
        $details = build::where('id' , $id)->get();
        $similar_realestates = build::whereBetween('price' , array($price-100000 , $price+100000))->get();
        return view('website/details_properties' , compact('details' , 'similar_realestates'));
    }
}
