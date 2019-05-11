<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use App\build;
use DB;

class buildController extends Controller
{

    public function all_builds(){
        $all_builds = build::all();
        return view('admin/build/all' , compact('all_builds'));
    }

    public function add_new_build(){
        return view('admin/build/add');
    }

    public function save_new_build(Request $request){
        $this->validate($request , [
            'name' => 'required',
            'price' => 'required',
            'rent' => 'required',
            'type' => 'required',
            'square' => 'required',
            'rooms' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $path = 'admin/images/build';
        $def_path = 'dfbuild.jpg';
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
            'name' => request('name'),
            'price' => request('price'),
            'rent' => request('rent'),
            'image' => $file_name,
            'status' => request('status'),
            'type' => request('type'),
            'place' => request('place'),
            'rooms' => request('rooms'),
            'square' => request('square'),
            'long_desc' => request('description'),
            'bathroom' => request('bathroom'),
            'user_name' => request('user_name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
            'zip' => request('zip'),

        ]);

        session()->flash('success' , 'Realestate added successfully');

        return redirect('admin-panel/all-realestates');
    }

    public function edit_build($id){
        $edit_build = build::where('id' , $id)->get();
        return view('admin/build/edit' , compact('edit_build'));

    }

    public function save_edit_build(Request $request , $id){
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

        DB::table('build')->where('id' , $id)->update([
            'name' => request('name'),
            'price' => request('price'),
            'rent' => request('rent'),
            'image' => $file_name,
            'status' => request('status'),
            'type' => request('type'),
            'place' => request('place'),
            'rooms' => request('rooms'),
            'square' => request('square'),
            'long_desc' => request('description'),
            'bathroom' => request('bathroom'),
            'user_name' => request('user_name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'address' => request('address'),
            'zip' => request('zip'),

        ]);

        session()->flash('success' , 'The change has been successful');

        return redirect('admin-panel/all-realestates');
    }

    public function delete_build(Request $request , $id){
        $delete_build = build::findOrFail($id);
        $delete_build->delete();

        session()->flash('success' , 'Realestate Successfully Deleted');
        return redirect()->back();
    }

    ///////////////////////////////////// message ////////////////////////////////////////////
    ///

    public function saveMessage(Request $request){
        dd($request->all());
        message::create([
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('message'),
        ]);

//        session()->flash('success' , 'Message Successfully Sended');
        return redirect('/');
    }

    public function allMessage(){
        $all_messages = message::all();
        return view('admin/message/all' , compact('all_messages'));
    }

    public function singleMessage($id){
        $single_message = message::where('id' , $id)->get();
        return view('admin/message/single' , compact('single_message'));
    }

    public function deleteMessage($id){
        $delete = message::findOrFail($id);
        $delete->delete();

        session()->flash('success' , 'Message Successfully Deleted');
        return redirect('admin-panel/all-messages');
    }
}
