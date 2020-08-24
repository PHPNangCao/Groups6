<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $user = User::get();
        $category = Category::get();
        $product = Product::get();
        return view('api-admin.modules.dashboard',compact('user','category','product'));
    }
}
