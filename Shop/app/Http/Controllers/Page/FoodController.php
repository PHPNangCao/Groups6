<?php

namespace App\Http\Controllers\Page;

use App\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function Food(){
        $food = Food::all();

        return view('page.page.monngon', compact('food'));
    }
}
