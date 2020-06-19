<?php

namespace App\Http\Controllers\TrangChu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function page(){
        return view('page.TrangChu.Modules.trang-chu');
    }
}
