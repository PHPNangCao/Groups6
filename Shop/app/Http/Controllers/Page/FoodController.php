<?php

namespace App\Http\Controllers\Page;

use App\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function getFood(){
        $food = Food::where('status', 1)->get();

        return view('page.page.monngon', compact('food'));
    }
    
    public function Food($id){
        $getfood = Food::where('id', $id)->first();
        $food = Food::where('status', 1)->get();

        return view('page.page.chi-tiet-mon-ngon', compact('food','getfood'));
    }
}
