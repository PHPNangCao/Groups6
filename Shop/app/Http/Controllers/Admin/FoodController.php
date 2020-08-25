<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Food;
use DateTime;
use Illuminate\Http\Request;


class FoodController extends Controller
{
    public function index(){
        $food = Food::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.food.index',compact('food'));
    } 

    public function create(){
        return view('api-admin.modules.food.create');
    }

    public function store(Request $request){

        $valdidateData = $request->validate([
            'title' => 'required|unique:food',
            'note' => 'required',
            'content' => 'required',
            'image' => 'required',

        ],[
            'title.required' => 'Vui lòng nhập tiêu đề',
            'image.required' => 'Vui lòng chọn ảnh',
            'content.required' => 'Vui lòng ghi nội dung',
            'note.required' => 'Vui lòng ghi chú ngắn',

        ]);

        $data = $request->except('_token');
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime;
        //$request->anh->store('images', 'public');

        //thêm ảnh
        $file = $request->image;      
        $file->move('upload/food', $file->getClientOriginalName());
        $data["image"] =  $file->getClientOriginalName();


        food::insert($data);
        return redirect()->route('admin.food.index');
    }

    public function edit($id)
    {
        $food = food::where('id',$id)->first();
        return view('api-admin.modules.food.edit', compact('food'));
    }

    public function update(Request $request, $id)
    {
        if($request->has('image')){
            $image_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('upload/food'),$image_name);
        }else{
            $image_name = $request->image_hidden;
        }
        $addimage = food::where('id',$id)->update([
            'title' => $request->title,
            'note' => $request->content,
            'content' => $request->content,
            'image' => $image_name,
        ]);
        if($addimage){
            return redirect()->route('admin.food.index')->with('thanhcong','Sửa thành công món ngon');
        }
            return redirect()->route('admin.food.index')->with('thanhcong','Sửa không thành công món ngon');
    }

    public function destroy($id)
    {
        food::where('id',$id)->delete();
        return redirect()->route('admin.food.index');
    }}