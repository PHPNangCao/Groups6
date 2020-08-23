<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new',1)->paginate(4);
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);
        //return view('page.trangchu',['slide' => $slide]);
        return view('page.page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }

    //cách 1 về truyền và nhận tham số
    public function getCategory($id){
        $sp_theoloai = Product::where('category_id',$id)->get();
        $sp_khac = Product::where('category_id','<>',$id)->paginate(3);
        $loai = Category::all();    
        $loai_sp = Category::where('id',$id)->first();
        return view('page.page.loai_sanpham', compact('sp_theoloai', 'sp_khac','loai','loai_sp'));
    }

    //cách 2 về truyền và nhận tham số
    public function getProductDetail(Request $request,$id){
        $sanpham = Product::where('id',$id)->first();
        $sp_tuongtu = Product::where('category_id',$sanpham->category_id)->paginate(6);
        return view('page.page.chitiet_sanpham',compact('sanpham','sp_tuongtu'));
    }

    public function getContact(){
        return view('page.page.lienhe');
    }

    public function getAbout(){
        return view('page.page.gioithieu');
    }

    public function getSearch(Request $request){
        $product = Product::where('name','like', '%'.$request->key.'%')
        ->orWhere('unit_price',$request->key)->get();
        return view('page.page.search', compact('product'));
    }
}
