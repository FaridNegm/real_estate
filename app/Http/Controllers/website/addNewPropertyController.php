<?php

namespace App\Http\Controllers\website;
use App\build;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class addNewPropertyController extends Controller
{
    public function index(){
        return view('website/add_property');
    }

    public function save_new_property(Request $request){
        $this->validate($request , [
            'title' => 'required',
            'price' => 'required',
            'rent' => 'required',
            'type' => 'required',
            'square' => 'required',
            'city' => 'required',
            'rooms' => 'required',
            'description' => 'required',
            'name' => 'required',
            'email' => 'required',
            'image' => 'required',
        ]);

        $path = 'admin/images/build';
        $def_path = request('image_hidden');
        $file = $request->file('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(1200, 900);
            $image_resize->save(public_path($path.'/'.$file_name));
        }

        build::create([
            'name' => request('title'),
            'price' => request('price'),
            'rent' => request('rent'),
            'image' => $file_name,
            'status' => request('status_hidden'),
            'type' => request('type'),
            'place' => request('city'),
            'rooms' => request('rooms'),
            'bathroom' => request('bathroom'),
            'square' => request('square'),
            'long_desc' => request('description'),
            'user_name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
            'zip' => request('zip'),
        ]);

        session()->flash('success' , 'The property has been successfully added. Awaiting approval from the Director');
        return redirect()->back();
    }
}
