<?php

namespace App\Http\Controllers\Admin;

use App\GroupPermission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;

class GrouppermissionController extends Controller
{
    public function index(){
        $group_permission = GroupPermission::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.grouppermission.index', compact('group_permission'));
    }

    public function create(){
       GroupPermission::get();
       return view('api-admin.modules.grouppermission.create');
    }   

    public function store(Request $request){

        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        GroupPermission::insert($data);

        return redirect()->route('admin.grouppermission.index');
    }

    public function edit($id){
        $group_permission = GroupPermission::where('id', $id)->first();
        return view('api-admin.modules.grouppermission.edit', compact('group_permission'));
    }

    public function update(Request $request, $id){
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        GroupPermission::where('id',$id)->update($data);

        return redirect()->route('admin.grouppermission.index');
    }

    public function destroy($id){
        GroupPermission::where('id',$id)->delete();
        return redirect()->route('admin.grouppermission.index');
    }
}
