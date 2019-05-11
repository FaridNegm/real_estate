<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class servicesController extends Controller
{
    public function allservices(){
        $all_services = services::all();
        return view('admin/services/all' , compact('all_services'));
    }

    public function addNewservice(){
        return view('admin/services/add');
    }

    public function saveNewService(Request $request){
        $this->validate($request , [
            'title' => 'required|min:5|max:250',
            'body' => 'required|min:50',
            'image' => 'required'
        ]);

        $path = 'admin/images/services';
        $def_path = 'dfservice.png';
        $file = request('image');
        if($file == ''){
            $file_name = $def_path;
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(1200, 900);
            $image_resize->save(public_path($path.'/'.$file_name));
        }

        $add = services::create([
            'title' => request('title'),
            'body' => request('body'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('success' , 'Service has been successfully added');

        return redirect('admin-panel/all-services');
    }

    public function editService($id){
        $edit_service = services::where('id' , $id)->get();
        return view('admin/services/edit' , compact('edit_service'));
    }

    public function updateService($id , Request $request){
        $this->validate($request , [
            'title' => 'required|min:5|max:250',
            'body' => 'required|min:50',
        ]);

        $path = 'admin/images/services';
        $def_path = 'dfservice.png';
        $file = request('image');
        if($file == ''){
            $file_name = request('image_hidden');
        }else{
            $file_name = time() . '.' .$file->getClientOriginalExtension();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(1200, 900);
            $image_resize->save(public_path($path.'/'.$file_name));
        }

        DB::table('services')->where('id' , $id)->update([
            'title' => request('title'),
            'body' => request('body'),
            'image' => $file_name,
            'status' => request('status'),
        ]);

        session()->flash('success' , 'The change has been successful');
        return redirect('admin-panel/all-services');
    }

    public function deleteService($id){
        $user = services::findOrFail($id);
        $user->delete();

        session()->flash('success' , 'Service Successfully Deleted');
        return redirect()->back();
    }
}
