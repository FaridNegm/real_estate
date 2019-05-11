<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\message;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class usersController extends Controller
{
    public function index(){
        return view('admin/welcome');
    }

    public function all_users(){
        $all_users = User::all();
        return view('admin/users/all' , compact('all_users'));
    }

    public function add_new_user(){
        return view('admin/users/add');
    }

    public function save_new_user(Request $request){
        $this->validate($request , [
            'name' => 'required|min:5|max:255',
            'email' => 'required',
            'password' => 'required|min:6|max:255',
            'status' => 'required',
        ]);

        $path = 'admin/images/users';
        $def_path = 'dfuser.png';
        $file = $request->file('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(1200, 900);
            $image_resize->save(public_path($path.'/'.$file_name));
        }

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'image' => $file_name,
            'status' => request('status'),
            'description' => request('description'),
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'instegram' => request('instegram'),
        ]);

        session()->flash('success' , 'Member added successfully');

        return redirect('admin-panel/all-users');
    }

    public function edit_user($id){
        $edit_user = User::where('id' , $id)->get();
        return view('admin/users/edit' , compact('edit_user'));

    }

    public function save_edit_user(Request $request , $id){
        $path = 'admin/images/users';
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

        DB::table('users')->where('id' , $id)->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'image' => $file_name,
            'status' => request('status'),
            'description' => request('description'),
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'instegram' => request('instegram'),
        ]);

        session()->flash('success' , 'The change has been successful');

        return redirect('admin-panel/all-users');
    }

    public function delete_user(Request $request , $id){
        $delete_user = User::findOrFail($id);
        $delete_user->delete();

        session()->flash('success' , 'User Successfully Deleted');
        return redirect()->back();
    }

    ///////////////////////////////////// message ////////////////////////////////////////////
    ///

    public function saveMessage(Request $request){
        message::create([
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('message'),
        ]);

       session()->flash('success' , 'Message Successfully Sended');
        return redirect()->back();
    }

    public function allMessage(){
        $all_messages = message::orderBy('id' , 'DESC')->get();
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
