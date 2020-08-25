<?php

namespace App\Http\Controllers\Admin;

use App\Shipment;
use App\Http\Controllers\Controller;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Str;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipment = Shipment::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.shipment.index',compact('shipment'));
    }

    public function create()
    {
        $supplier = Supplier::get();
        return view('api-admin.modules.shipment.create', compact('supplier'));
    }

    public function store(request $request){

        $valdidateData = $request->validate(
            [
            'name' => 'required|unique:Shipment',
            'supplier_id' => 'required',
            'total' => 'required',
            'quantity' => 'required',
            'status' => 'required',


            ],[
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.unique' => 'Tên sản phẩm này đã tồn tại',
            'supplier_id.required' => 'Vui lòng chọn nhà cung cấp',
            'total.required' => 'Vui lòng nhập tổng lô hàng',
            'quantity.required' => 'Vui lòng số lượng',

            ]);

        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        DB::table('shipment')->insert($data);
        return redirect()->route('admin.shipment.index');
    }

    public function edit($id){
        $supplier = Supplier::get();
        $shipment = Shipment::where('id',$id)->first();
        return view('api-admin.modules.shipment.edit', compact('shipment', 'supplier'));
    }

    public function update(Request $request, $id){
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        Shipment::where('id',$id)->update($data);
        return redirect()->route('admin.shipment.index');
    }

    public function status($id)
    {
        $shipment = Shipment::find($id);
        $shipment->status = ! $shipment->status;
        $shipment->save();
        return redirect()->back();
    }

    public function destroy($id){
        Shipment::where('id',$id)->delete();
        return redirect()->route('admin.shipment.index');
    }
}
