<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getNews(){

        return view('page.page.chi-tiet-tin-tuc');
    }  
    
    public function News($id){
        $getnews = News::where('id', $id)->first();

        return view('page.page.chi-tiet-tin-tuc', compact('getnews'));
    }


}
