<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recruitment;


class RecruitmentController extends Controller
{
    public function getRecruitment(){

        $recruitment = Recruitment::get();
        return view('page.page.tuyendung',compact('recruitment'));
    }   
    
    public function recruitment($url){

        $getRecruitment = Recruitment::where('url', $url)->first();
        $recruitment = Recruitment::get();
        return view('page.page.chi-tiet-tuyen-dung', compact('getRecruitment','recruitment'));
    }

}
