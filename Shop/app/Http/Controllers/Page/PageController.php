<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
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
