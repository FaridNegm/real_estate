<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\siteSetting;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class sitesettingsController extends Controller
{
    public function allsetting(){
        $all_settings = siteSetting::all();
        return view('admin/site_settings/all' , compact('all_settings'));
    }

    public function editsiteSetting($name){
        $edit_site_setting = siteSetting::where('name' , $name)->get();
        return view('admin/site_settings/edit' , compact('edit_site_setting'));
    }

    public function updateSiteSetting ($name , Request $request){
        $path = 'admin/images/sitesetting';
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

        DB::table('siteSetting')->where('name' , $name)->update([
            'name' => request('name'),
            'description' => request('description'),
            'email' => request('email'),
            'phones' => request('phones'),
            'address' => request('address'),
            'fax' => request('fax'),
            'site_image' => $file_name,
            'facebook' => request('facebook'),
            'twitter' => request('twitter'),
            'youtube' => request('youtube'),
            'behance' => request('behance'),

        ]);

        session()->flash('success' , 'The change has been successful');
        return redirect('admin-panel/all-settings');
    }
}
