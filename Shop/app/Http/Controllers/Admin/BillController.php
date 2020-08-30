<?php

namespace App\Http\Controllers\Admin;

use App\BillDetail;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(){

    }

    public function create(){

        $product = Product::get();
        return view('api-admin.modules.bill.create',compact('product'));
    }

    public function store(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->note = $request->note;
        $customer->save();

        $bill_detail = new BillDetail(); 
        $bill_detail = array();
        
        return redirect()->back();
    }
}
