<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.category.index',compact('category'));
    }

    public function create(){
        return view('api-admin.modules.category.create');
    }

    public function store(Request $request){

        $valdidateData = $request->validate([
            'name' => 'required|unique:Category',
            'image' => 'required'

        ],[
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.unique' => 'Tên sản phẩm này đã tồn tại',
            'image.required' => 'Vui lòng chọn ảnh',

        ]);

        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        $data['url'] = Str::slug($data['name'], '-');
        //$request->anh->store('images', 'public');

        //thêm ảnh
        $file = $request->image;
        $file->move('upload/category', $file->getClientOriginalName());
        $data["image"] =  $file->getClientOriginalName();


        DB::table('category')->insert($data);
        return redirect()->route('admin.category.index');
    }

    public function status($id)
    {
        $category = Category::find($id);
        $category->status = ! $category->status;
        $category->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('api-admin.modules.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        if($request->has('image')){
            $image_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('upload/category'),$image_name);
        }else{
            $image_name = $request->image_hidden;
        }
            $url = Str::slug($request->name, '-');
        $addimage = Category::where('id',$id)->update([
            'name' => $request->name,
            'url' => $url,
            'description' => $request->description,
            'image' => $image_name,
            'status' => $request->status
        ]);
        if($addimage){
            return redirect()->route('admin.category.index')->with('thanhcong','Sửa thành công bảng loại sản phẩm');
        }
            return redirect()->route('admin.category.index')->with('thanhcong','Sửa không thành công bảng loại sản phẩm');
    }

    public function destroy($id)
    {
        Category::where('id',$id)->delete();
        return redirect()->route('admin.category.index');
    }
}
