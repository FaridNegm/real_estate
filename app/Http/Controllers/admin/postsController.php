<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class postsController extends Controller
{
    public function all_posts(Request $request){
        $all_posts = post::all();
        return view('admin/posts/all' , compact('all_posts'));
    }

    public function add_new_post(Request $request){
        return view('admin/posts/add');
    }

    public function save_new_post(Request $request){
        $this->validate($request , [
            'title' => 'required|min:8|max:255',
            'body' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $path = 'admin/images/posts';
        $def_path = 'dfwork.jpg';
        $file = $request->file('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(1200, 900);
            $image_resize->save(public_path($path.'/'.$file_name));
        }

        post::create([
            'title' => request('title'),
            'body' => request('body'),
            'category' => request('category'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('success' , 'Work has been successfully added');

        return redirect('admin-panel/all-posts');
    }

    public function edit_post($id){
        $edit_post = post::where('id' , $id)->get();
        return view('admin/posts/edit' , compact('edit_post'));
    }

    public function save_edit_post(Request $request , $id){
        $path = 'admin/images/posts';
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

        $update = DB::table('posts')->where('id' , $id)->update([
            'title' => request('title'),
            'body' => request('body'),
            'category' => request('category'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('success' , 'The change has been successful');

        return redirect('admin-panel/all-posts');
    }

    public function delete_post(Request $request , $id){
        $delete_post = post::findOrFail($id);
        $delete_post->delete();

        session()->flash('error' , 'Post Successfully Deleted');
        return redirect()->back();
    }
}
