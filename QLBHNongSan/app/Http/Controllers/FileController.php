<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        return view('demo_upload');
    }

    public function doUpload(Request $request)
    {
        //xử lý upload ở đây
        if ($request->hasFile('fileTest')) {
            $file = $request->filesTest;

            //Lấy Tên files
            echo 'Tên Files: ' . $file->getClientOriginalName();
            echo '<br/>';

            //Lấy Đuôi File
            echo 'Đuôi file: ' . $file->getClientOriginalExtension();
            echo '<br/>';

            //Lấy đường dẫn tạm thời của file
            echo 'Đường dẫn tạm: ' . $file->getRealPath();
            echo '<br/>';

            //Lấy kích cỡ của file đơn vị tính theo bytes
            echo 'Kích cỡ file: ' . $file->getSize();
            echo '<br/>';

            //Lấy kiểu file
            echo 'Kiểu files: ' . $file->getMimeType();
        }
    
    }
}