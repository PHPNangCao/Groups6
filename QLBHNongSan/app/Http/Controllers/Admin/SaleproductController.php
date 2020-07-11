<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;


class SaleproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khuyenmaisanpham = DB::table('SanPhamKhuyenMai')->get();
        return view('api-admin.modules.saleproduct.index', ['khuyenmaisanpham' => $khuyenmaisanpham]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khuyenmai  = DB::table('KhuyenMai')->get(); 
        $sanpham = DB::table('SanPham')->get();
        return view('api-admin.modules.saleproduct.create',['khuyenmai' => $khuyenmai], ['SanPham' => $sanpham]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        DB::table('SanPhamKhuyenMai')->insert($data);
        return redirect()->route('admin.saleproduct.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $khuyenmai = DB::table('KhuyenMai')->get();
        $sanpham = DB::table('SanPham')->get();
        $khuyenmaisanpham = DB::table('SanPhamKhuyenMai')->where('id',$id)->first();
        return view('api-admin.modules.saleproduct.edit', ['sanphamkhuyenmai' => $khuyenmaisanpham],['khuyenmai' => $khuyenmai, 'SanPham' => $sanpham]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $data['updated_at'] = new DateTime;
        DB::table('SanPhamKhuyenMai')->where('id',$id)->update($data);
        return redirect()->route('admin.saleproduct.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('SanPhamKhuyenMai')->where('id',$id)->delete();
        return redirect()->route('admin.saleproduct.index');
    }
}
