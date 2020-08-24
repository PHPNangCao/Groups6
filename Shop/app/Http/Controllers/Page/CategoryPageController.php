<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{
    //cách 1 về truyền và nhận tham số
    public function getCategory($id){
        $sp_theoloai = Product::where('category_id',$id)->paginate(9);
        $sp_khac = Product::where('category_id','<>',$id)->paginate(3);
        $loai = Category::all();    
        $loai_sp = Category::where('id',$id)->first();
        return view('page.page.loai_sanpham', compact('sp_theoloai', 'sp_khac','loai','loai_sp'));
    }
}
