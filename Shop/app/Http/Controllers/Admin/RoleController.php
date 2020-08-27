<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use DateTime;

class RoleController extends Controller
{
    public function index(){
        $role = Role::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.role.index', compact('role'));
    }

    public function create(){
        $role = Role::get();
        return view('api-admin.modules.role.create', compact('role'));
    }

    public function store(Request $request){
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        Role::insert($data);

        return redirect()->route('admin.role.index');
    }

    public function edit($id){
        $role = Role::where('id', $id)->first();
        return view('api-admin.modules.role.edit', compact('role'));
    }

    public function update(Request $request, $id){
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        Role::where('id',$id)->update($data);

        return redirect()->route('admin.role.index');
    }

    public function destroy($id){
        Role::where('id',$id)->delete();
        return redirect()->route('admin.role.index');
    }
}
