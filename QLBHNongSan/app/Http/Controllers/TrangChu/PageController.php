<?php

namespace App\Http\Controllers\TrangChu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function page(){
        return view('page.TrangChu.Modules.trang-chu');
    }
    
    function dangki(){
        return view('page.TrangChu.Modules.dang-ki');
    }

    function xulydangki(){
       
    }

    function tintuc(){
        return view('page.TrangChu.Modules.tin-tuc');

    }

    function khuyenmai(){
        return view('page.TrangChu.Modules.khuyen-mai');
        
    }

    function monngon(){
        return view('page.TrangChu.Modules.mon-ngon');
        
    }

    function lienhe(){
        return view('page.TrangChu.Modules.lien-he');
        
    }

    function loainguoidung(){
        return view('page.TrangChu.Modules.loai-nguoi-dung');
        
    }

}
