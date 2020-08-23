<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slide;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index(){
        $slide = Slide::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.slide.index',compact('slide'));
    } 

    public function create(){
        return view('api-admin.modules.slide.create');
    }

    public function store(Request $request){

        // $valdidateData = $request->validate([
        //     'name' => 'required|unique:slide',
        //     'image' => 'required'

        // ],[
        //     'name.required' => 'Vui lòng nhập tên sản phẩm',
        //     'name.unique' => 'Tên sản phẩm này đã tồn tại',
        //     'image.required' => 'Vui lòng chọn ảnh',

        // ]);

        
            $image_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('upload/slide'),$image_name);
            $url = Str::slug($request->slug, '-');
            Slide::insert([
            'url' => $url,
            'image' => $image_name,
        ]);
        return redirect()->route('admin.slide.index');
    }

    public function destroy($id)
    {
        Slide::where('id',$id)->delete();
        return redirect()->route('admin.slide.index');
    }
}
