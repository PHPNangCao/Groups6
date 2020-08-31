<?php

namespace App\Http\Controllers\Admin;

use App\BillDetail;
use App\Bills;
use App\Http\Controllers\Controller;


class BillController extends Controller
{
    public function index(){
        $bills = Bills::get();
        return view('api-admin.modules.bill.index', compact('bills'));
    }
 
    
    public function status($id)
    {
        $bills = Bills::find($id);
        $bills->status = ! $bills->status;
        $bills->save();
        return redirect()->back();
    }

    public function show($id){
        $bills = Bills::where('id', $id)->get();
        $billDetail = BillDetail::where('bill_id',$id)->get();
        return view('api-admin.modules.bill.bill_detail',compact('bills','billDetail'));
    }
}
