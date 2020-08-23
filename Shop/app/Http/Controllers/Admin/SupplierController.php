<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Supplier;
use DateTime;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.Supplier.index',compact('supplier'));
    } 

    public function create(){
        return view('api-admin.modules.Supplier.create');
    }

    public function store(Request $request){

        // $valdidateData = $request->validate([
        //     'name' => 'required|unique:Supplier',
        //     'image' => 'required'

        // ],[
        //     'name.required' => 'Vui lòng nhập tên sản phẩm',
        //     'name.unique' => 'Tên sản phẩm này đã tồn tại',
        //     'image.required' => 'Vui lòng chọn ảnh',

        // ]);

        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;



        Supplier::insert($data);
        return redirect()->route('admin.supplier.index');
    }

    public function edit($id)
    {
        $supplier = Supplier::where('id',$id)->first();
        return view('api-admin.modules.Supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        Supplier::where('id',$id)->update($data);
        return redirect()->route('admin.supplier.index');
    }

    public function destroy($id)
    {
        Supplier::where('id',$id)->delete();
        return redirect()->route('admin.supplier.index');
    }
}
