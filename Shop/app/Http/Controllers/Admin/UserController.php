<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.user.index',compact('user'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('api-admin.modules.user.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $valdidateData = $request->validate([
            'name'              => 'required',
            'email'             => 'required|unique:Users',
            'password'          => 'required',

        ],[
            'name.required'                => 'Vui lòng nhập tên',
            'email.required'               => 'Vui lòng nhập Email',
            'email.unique'                 => 'Tên Email đã tồn tại',
            'password.required'            => 'Vui lòng nhập mật khẩu',

        ]);
        //Để đảm bảo tính bảo toàn dữ liệu
        try {
            DB::beginTransaction();

            //Insert data voa user table
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => bcrypt($request->password),
            ]);

            //insert data vao role_user

            $user->roles()->attach($request->roles);
            // $roles = $request->roles;
            // foreach ($roles as $role_id){
            //     DB::table('role_user')->insert([
            //         'user_id' => $user->id,
            //         'role_id' => $role_id
            //     ]);
            // }
            DB::commit();
            return redirect()->route('admin.user.index');
        }
        catch(\Exception $exception)
        {
            DB::rollBack();
            return redirect()->route('admin.user.index');
        }


        // $data = $request->except('_token');
        // $data['created_at'] = new DateTime;
        // $data['updated_at'] = new DateTime;
        // $data['password'] = bcrypt($request->password);

        // User::insert($data);
        // return redirect()->route('admin.user.index');
    }

    public function status($id)
    {
        $user = User::find($id);
        $user->status = ! $user->status;
        $user->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = User::where('id',$id)->first();
        $listRoleOfUser = DB::table('role_user')->where('user_id', $id)->pluck('role_id');
        return view('api-admin.modules.user.edit',compact('user', 'roles', 'listRoleOfUser'));
    }

    public function update(Request $request, $id)
    {
        $valdidateData = $request->validate([
            'email'             => 'required',
            'password'          => 'required',
        ],[
            'email.required'               => 'Vui lòng nhập Email',
            'password.required'            => 'Vui lòng nhập mật khẩu',
        ]);

        // $data = $request->except('_token');
        // $data['updated_at'] = new DateTime;
        // $data['password'] = bcrypt($request->password);
        // User::where('id',$id)->update($data);

        try
        {
            DB::beginTransaction();

            //update du lieu vao user
            User::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => bcrypt($request->password),
            ]);



            //update du lieu vao role_user
            DB::table('role_user')->where('user_id',$id)->delete();
            $user = User::find($id);
            $user->roles()->attach($request->roles);

            DB::commit();
            return redirect()->route('admin.user.index');
        }
        catch(\Exception $exception)
        {
            DB::rollBack();
            return redirect()->route('admin.user.index');
        }
    }

    public function destroy($id)
    {
        try
        {
            DB::beginTransaction();
            //tim kiem id cua user
            $user = User::find($id);

            //xoa khoa ngoai cua user do
            $user->roles()->detach();

            //xoa user
            $user->delete($id);

            DB::commit();
            return redirect()->route('admin.user.index');
        }
        catch(\Exception $exception)
        {
            DB::rollBack();
            return redirect()->route('admin.user.index');
        }
    }
}
