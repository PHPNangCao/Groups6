<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OopsController extends Controller
{
    public function Oops(){
        return view('page.page.Oops');
    }
}
