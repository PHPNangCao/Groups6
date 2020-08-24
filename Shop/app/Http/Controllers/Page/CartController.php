<?php

namespace App\Http\Controllers\Page;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function AddCart(Request $request, $id){
        $product = Product::where('id',$id)->first();
        if($product != null){
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldcart);
            $newCart->AddCart($product, $id);

            $request->session()->put('Cart',$newCart);

        }
        return view();
    }   

    public function payment(){
        return view('page.page.shopping-cart');
    }
}
