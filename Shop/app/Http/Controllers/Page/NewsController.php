<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function News(){
        $news = News::all();
        
        return view('page.page.tintuc', compact('news'));
    }
}
