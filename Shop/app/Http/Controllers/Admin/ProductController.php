<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.product.index',compact('product'));
    }

    public function create(){
        $category = Category::get();
        return view('api-admin.modules.product.create', compact('category'));
    }

    public function store(Request $request){

        $valdidateData = $request->validate([
            'name' => 'required|unique:Product',
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
        $file->move('upload/product', $file->getClientOriginalName());
        $data["image"] =  $file->getClientOriginalName();


        DB::table('product')->insert($data);
        return redirect()->route('admin.product.index');
    }

    public function status($id)
    {
        $product = Product::find($id);
        $product->status = ! $product->status;
        $product->save();
        return redirect()->back();
    }

    public function hot($id)
    {
        $product = Product::find($id);
        $product->hot = ! $product->hot;
        $product->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::get();
        $product = Product::where('id',$id)->first();
        return view('api-admin.modules.product.edit',compact('product','category'));
    }

    public function update(Request $request, $id)
    {
        if($request->has('image')){
            $image_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('upload/product'),$image_name);
        }else{
            $image_name = $request->image_hidden;
        }
            $url = Str::slug($request->name, '-');
        $addimage = Product::where('id',$id)->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'url' => $url,
            'description' => $request->description,
            'unit_price' => $request->unit_price,
            'promotion_price' => $request->promotion_price,
            'image' => $image_name,
            'unit' => $request->unit,
            'status' => $request->new,
            'status' => $request->status,
            'status' => $request->hot
        ]);
        if($addimage){
            return redirect()->route('admin.product.index')->with('thanhcong','Sửa thành công bảng sản phẩm');
        }
            return redirect()->route('admin.product.index')->with('thanhcong','Sửa không thành công bảng sản phẩm');
    }

    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('admin.product.index');
    }
}
