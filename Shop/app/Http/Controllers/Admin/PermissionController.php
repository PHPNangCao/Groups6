<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Permission;
use App\GroupPermission;
use DateTime;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    public function index(){
        $permission = Permission::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.permission.index', compact('permission'));
    }

    public function create(){
        $group_permission = GroupPermission::get();
        return view('api-admin.modules.permission.create', compact('group_permission'));
    }

    public function store(Request $request){
        
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        DB::table('permission')->insert($data);

        return redirect()->route('admin.permission.index');
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        
    }

    public function destroy($id){
        
    }
}
