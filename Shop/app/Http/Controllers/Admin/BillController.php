<?php

namespace App\Http\Controllers\Admin;

use App\BillDetail;
use App\Bills;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(){
        $bills = Bills::get();
        return view('api-admin.modules.bill.index', compact('bills'));
    }

    public function show($id){
        $bills = Bills::where('id', $id)->get();
        $billDetail = BillDetail::where('bill_id',$id)->get();
        return view('api-admin.modules.bill.bill_detail',compact('bills','billDetail'));
    }
    public function status($id)
    {
        $bills = Bills::find($id);
        $bills->status = ! $bills->status;
        $bills->save();
        return redirect()->back();
    }
}
