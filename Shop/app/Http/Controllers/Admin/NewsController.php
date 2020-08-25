<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.news.index',compact('news'));
    } 

    public function create(){
        return view('api-admin.modules.news.create');
    }

    public function store(Request $request){

        $valdidateData = $request->validate([
            'title' => 'required|unique:news',
            'content' => 'required',
            'image' => 'required',

        ],[
            'image.required' => 'Vui lòng chọn ảnh',
            'content.required' => 'Vui lòng điền nội dung',
            'title.required' => 'Vui lòng điền tiêu đề',

        ]);

        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        $data['url'] = Str::slug($data['title'], '-');
        //$request->anh->store('images', 'public');

        //thêm ảnh
        $file = $request->image;      
        $file->move('upload/news', $file->getClientOriginalName());
        $data["image"] =  $file->getClientOriginalName();


        News::insert($data);
        return redirect()->route('admin.news.index');
    }

    public function edit($id)
    {
        $news = News::where('id',$id)->first();
        return view('api-admin.modules.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        if($request->has('image')){
            $image_name = $request->image->getClientOriginalName();
            $request->image->move(public_path('upload/news'),$image_name);
        }else{
            $image_name = $request->image_hidden;
        }
            $url = Str::slug($request->title, '-');
        $addimage = news::where('id',$id)->update([
            'title' => $request->title,
            'url' => $url,
            'content' => $request->content,
            'image' => $image_name,
        ]);
        if($addimage){
            return redirect()->route('admin.news.index')->with('thanhcong','Sửa thành công bảng tin');
        }
            return redirect()->route('admin.news.index')->with('thanhcong','Sửa không thành công bảng tin');
    }

    public function destroy($id)
    {
        News::where('id',$id)->delete();
        return redirect()->route('admin.news.index');
    }
}
