<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductPageCotroller extends Controller
{
    //cách 2 về truyền và nhận tham số
    public function getProductDetail(Request $request,$id){

        $sanpham = Product::where('id',$id)->first();
        $sp_tuongtu = Product::where('category_id',$sanpham->category_id)->paginate(3);
        $product = Product::where('category_id','<>',$sanpham->category_id)->paginate(3);
        return view('page.page.chitiet_sanpham',compact('sanpham','sp_tuongtu','product'));
    }
}
