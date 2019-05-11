<?php

namespace App\Http\Controllers\website;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services;
use App\post;
use App\teamWork;
use App\testmonials;
use App\siteSetting;
use App\build;

class websiteController extends Controller
{
    public function index(){
        $builds = build::limit(6)->where('status' , 'Active')->whereBetween('id' , array(1,100))->inRandomOrder()->get();
        $builds_slider = build::limit(3)->where('status' , 'Active')->whereBetween('id' , array(1,20))->inRandomOrder()->get();
        $users = User::limit(6)->where('status' , 'Admin')->get();
        $testmonials = testmonials::limit(5)->where('status' , 1)->get();
        return view('website/index' , compact('builds' , 'builds_slider' , 'users' , 'testmonials'));
    }

    public function search(Request $request){
        $place = request('place');
        $rent = request('rent');
        $type = request('type');
        $rooms = request('rooms');
        $square = request('square');
        $price_from = request('from');
        $price_to = request('to');

        $builds = build::orderBy('id' , 'DESC')->WhereBetween('price' , array($price_from , $price_to))
                        ->orWhere('rent' , $rent)
                        ->orWhere('price' , $price_from)
                        ->orWhere('price' , $price_to)
                        ->orWhere('type' , $type)
                        ->orWhere('rooms' , $rooms)
                        ->orWhere('rooms' , $rooms)
                        ->orWhere('square' , $square)
                        ->orWhere('place' , $place)
                        // ->orWhere('name' , 'like' , '%' . $general_search . '%')
                        // ->orWhere('long_desc' , 'like' , '%' . $general_search . '%')
                        ->get();
        return view('website/search' , compact('builds'));
    }

    public function global_search(){
        $general_search = request('general_search');

        $builds = build::orderBy('id' , 'DESC')->Where('name' , 'like' , '%' . $general_search . '%')
                        ->orWhere('long_desc' , 'like' , '%' . $general_search . '%')
                        ->get();
        return view('website/search' , compact('builds'));
    }

    public function Flat(){
        $builds = build::orderBy('id' , 'DESC')->where('type' , 'Flat')->paginate(6);
        return view('website/search' , compact('builds'));
    }

    public function Villa(){
        $builds = build::orderBy('id' , 'DESC')->where('type' , 'Villa')->paginate(6);
        return view('website/search' , compact('builds'));
    }

    public function Chalet(){
        $builds = build::orderBy('id' , 'DESC')->where('type' , 'Chalet')->paginate(6);
        return view('website/search' , compact('builds'));
    }

    public function Sale(){
        $builds = build::orderBy('id' , 'DESC')->where('rent' , 'Ownership')->paginate(6);
        return view('website/search' , compact('builds'));
    }

    public function Rent(){
        $builds = build::orderBy('id' , 'DESC')->where('rent' , 'Rent')->paginate(6);
        return view('website/search' , compact('builds'));
    }

    public function Between_than_200000(){
        $builds = build::orderBy('id' , 'DESC')->whereBetween('price' , array('0' , '200000'))->paginate(6);
        return view('website/search' , compact('builds'));
    }

    public function Between_than_500000(){
        $builds = build::orderBy('id' , 'DESC')->whereBetween('price' , array('200000' , '500000'))->paginate(6);
        return view('website/search' , compact('builds'));
    }

    public function Bigger_than_500000(){
        $builds = build::where('price' , '>' , '500000')->paginate(6);
        return view('website/search' , compact('builds'));
    }

}

