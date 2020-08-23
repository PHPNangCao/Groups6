<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShipmentDetail;
use App\Shipment;
use App\Product;
use Illuminate\Support\Facades\DB;
use DateTime;

class ShipmentDetailController extends Controller
{
    public function index(){
        $shipmentdetail = ShipmentDetail::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.shipmentdetail.index',compact('shipmentdetail'));
    }

    public function create(){
        $shipmentdetail = ShipmentDetail::get();
        $shipment = Shipment::get();
        $product = Product::get();
        return view('api-admin.modules.shipmentdetail.create', compact('shipmentdetail', 'shipment','product'));
    }

    public function store(Request $request){
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        DB::table('shipmentdetail')->insert($data);
        return redirect()->route('admin.shipmentdetail.index');
    }

    public function edit($id){
        $shipmentdetail = ShipmentDetail::where('id',$id)->first();
        $shipment = Shipment::get();
        $product = Product::get();
        return view('api-admin.modules.shipmentdetail.edit', compact('shipmentdetail', 'shipment','product'));
    }

    public function update(Request $request, $id){

    }

    public function status($id){

    }

    public function destroy($id){

    }
}
