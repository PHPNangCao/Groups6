<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews(){

        $news = News::get();
        return view('page.page.tintuc',compact('news'));
    }   
    
    public function News($url){

        $getnews = News::where('url', $url)->first();
        $news = News::get();
        return view('page.page.chi-tiet-tin-tuc', compact('getnews','news'));
    }


}
