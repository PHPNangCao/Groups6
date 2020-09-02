<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use DateTime;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    public function index(){
        $role = Role::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.role.index', compact('role'));
    }

    public function create(){
        $permissions = Permission::all();
        return view('api-admin.modules.role.create', compact('permissions'));
    }

    public function store(Request $request){

        $valdidateData = $request->validate([
            'name'              => 'required|unique:Role',
            'display_name'             => 'required',
        ],[
            'name.required'                => 'Vui lòng nhập tên vai trò',
            'display_name.required'               => 'Vui lòng nhập tên hiển thị',
            'name.unique'                 => 'Tên Vai trò đã tồn tại',
        ]);

        try {
            DB::beginTransaction();

            $role = Role::create([
                'name' => $request->name,
                'display_name' => $request->display_name,
            ]);

            $role->permissions()->attach($request->permission);

            DB::commit();
            return redirect()->route('admin.role.index');
        }
        catch(\Exception $exception)
        {
            DB::rollBack();
            return redirect()->route('admin.role.index');
        }
    }

    public function edit($id){
        $permissions = Permission::all();
        $role = Role::where('id', $id)->first();
        $getAllPermissionOfRole = DB::table('permission_role')->where('role_id', $id)->pluck('permission_id');
        return view('api-admin.modules.role.edit', compact('role', 'permissions', 'getAllPermissionOfRole'));
    }

    public function update(Request $request, $id){

        $$valdidateData = $request->validate([
            'name'             => 'required',
            'display_name'          => 'required',
        ],[
            'name.required'               => 'Vui lòng nhập tên vai trò',
            'display_name.required'            => 'Vui lòng nhập tên hiển thị',
        ]);

        try {
            DB::beginTransaction();

            Role::where('id', $id)->update([
                'name' => $request->name,
                'display_name' => $request->display_name,
            ]);

            DB::table('permission_role')->where('id', $id)->delete();
            $role = Role::find($id);
            $role->permissions()->attach($request->permission);

            DB::commit();
            return redirect()->route('admin.role.index');
        }
        catch(\Exception $exception)
        {
            DB::rollBack();
            return redirect()->route('admin.role.index');
        }
    }

    public function destroy($id){
        try
        {
            DB::beginTransaction();

            $role = Role::find($id);
            $role->permissions()->detach();
            $role->delete($id);

            DB::commit();
            return redirect()->route('admin.role.index');
        }
        catch(\Exception $exception)
        {
            DB::rollBack();
            return redirect()->route('admin.role.index');
        }
    }
}
