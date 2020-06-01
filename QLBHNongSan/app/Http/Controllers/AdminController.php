<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin(){
        return view('admin.index');
    }

    function danhmuc(){
        return view('admin.danhmuc.danhmuc');
    }

    function create(){
        return view('admin.danhmuc.create');
    }

    function sanpham(){
        return view('admin.sanpham.sanpham');
    }

    function nguoidung(){
        return view('admin.nguoidung.nguoidung');
    }

    function khachhang(){
        return view('admin.khachhang.khachhang');
    }

    function donhang(){
        return view('admin.donhang.donhang');
    }

    function binhluan(){
        return view('admin.binhluan.binhluan');
    }

    function monngon(){
        return view('admin.monngon.monngon');
    }

    function tuyendung(){
        return view('admin.tuyendung.tuyendung');
    }
    
    function khuyenmai(){
        return view('admin.khuyenmai.khuyenmai');
    }

    function khohang(){
        return view('admin.khohang.khohang');
    }

    function vanchuyen(){
        return view('admin.vanchuyen.vanchuyen');
    }

}
