<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;
use DateTime;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.customer.index',compact('customer'));
    }

    public function create(){
        $customer = Customer::get();
        return view('api-admin.modules.customer.create', compact('customer'));
    }

    public function store(Request $request){
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        Customer::insert($data);
        return redirect()->route('admin.customer.index');
    }

    public function edit($id){
        $customer = Customer::where('id', $id)->first();
        return view('api-admin.modules.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id){
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        Customer::where('id',$id)->update($data);
        return redirect()->route('admin.customer.index');
    }

    public function destroy($id){
        Customer::where('id',$id)->delete();
        return redirect()->route('admin.customer.index');
    }
}
