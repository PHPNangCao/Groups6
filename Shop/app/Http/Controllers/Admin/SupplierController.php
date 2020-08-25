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

        $valdidateData = $request->validate([
            'name' => 'required|unique:Supplier',
            'image' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ],[
            'name.required' => 'Vui lòng nhập tên nhà cung cấp',
            'name.unique' => 'Tên nhà cung cấp này đã tồn tại',
            'image.required' => 'Vui lòng chọn ảnh',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Tên email này đã tồn tại',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'address.unique' => 'Tên địa chỉ này đã tồn tại',
            'phone.required' => 'Vui lòng số điện thoại',

        ]);

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
