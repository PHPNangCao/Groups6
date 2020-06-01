<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin(){
        return view('admin.index');
    }

    function danhmuc(){
        return view('admin.danhmuc');
    }

    function sanpham(){
        return view('admin.sanpham');
    }

    function nguoidung(){
        return view('admin.nguoidung');
    }

    function khachhang(){
        return view('admin.khachhang');
    }

    function donhang(){
        return view('admin.donhang');
    }

    function binhluan(){
        return view('admin.binhluan');
    }

    function monngon(){
        return view('admin.monngon');
    }

    function tuyendung(){
        return view('admin.tuyendung');
    }
    
    function khuyenmai(){
        return view('admin.khuyenmai');
    }

    function khohang(){
        return view('admin.khohang');
    }

    function vanchuyen(){
        return view('admin.vanchuyen');
    }

}
