<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\testmonials;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class testmonialsController extends Controller
{
    public function allTestmonial(){
        $all_testmonials = testmonials::all();
        return view('admin/testmonial/all' , compact('all_testmonials'));
    }

    public function addNewTestmonial(){
        return view('admin/testmonial/add');
    }

    public function saveNewSeTestmonial(Request $request){
        $this->validate($request , [
            'title' => 'required|min:5|max:250',
            'body' => 'required|min:50',
            'image' => 'required'
        ]);

        $path = 'admin/images/testmonials';
        $def_path = 'dfuser.png';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(1200, 900);
            $image_resize->save(public_path($path.'/'.$file_name));
        }

        $add = testmonials::create([
            'title' => request('title'),
            'body' => request('body'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('success' , 'Testmonial has been successfully added');

        return redirect('admin-panel/all-testmonials');
    }

    public function editTestmonial($id){
        $edit_testmonial = testmonials::where('id' , $id)->get();
        return view('admin/testmonial/edit' , compact('edit_testmonial'));
    }

    public function updateTestmonial($id , Request $request){
        $this->validate($request , [
            'title' => 'required|min:5|max:250',
            'body' => 'required|min:50',
        ]);

        $path = 'admin/images/testmonials';
        $def_path = request('image_hidden');
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(1200, 900);
            $image_resize->save(public_path($path.'/'.$file_name));
        }

        DB::table('testmonials')->where('id' , $id)->update([
            'title' => request('title'),
            'body' => request('body'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('success' , 'The change has been successful');
        return redirect('admin-panel/all-testmonials');
    }

    public function deleteTestmonial($id){
        $user = testmonials::findOrFail($id);
        $user->delete();

        session()->flash('success' , 'TestmoniaL Successfully Deleted');
        return redirect()->back();
    }

}
