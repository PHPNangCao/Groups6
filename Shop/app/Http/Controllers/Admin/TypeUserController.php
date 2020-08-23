<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TypeUser;
use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeUserController extends Controller
{
        public function index(){
                $TypeUser = TypeUser::orderBy('id', 'DESC')->get();
                return view('api-admin.modules.Type_user.index', compact('TypeUser'));
        }

        public function create()
    {
        $user = User::get();
        return view('api-admin.modules.Type_user.create',compact('user'));
    }

    public function store(Request $request)
    {
        // $valdidateData = $request->validate([
        //     'name'              => 'required',
        //     'email'             => 'required|unique:Users',
        //     'password'          => 'required',
            
        // ],[
        //     'name.required'                => 'Vui lòng nhập tên',
        //     'email.required'               => 'Vui lòng nhập Email',
        //     'email.unique'                 => 'Tên Email đã tồn tại',
        //     'password.required'            => 'Vui lòng nhập mật khẩu',
            
        // ]);

        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        TypeUser::insert($data);

        return redirect()->route('admin.typeuser.index');
    }

    public function edit($id){
        $user = User::get();
        $typeuser = TypeUser::where('id', $id)->first();
        return view('api-admin.modules.Type_user.edit',compact('typeuser','user'));
    }

    public function update(Request $request, $id){
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;

        TypeUser::where('id', $id)->update($data);

        return redirect()->route('admin.typeuser.index');
    }

    public function destroy($id){
        TypeUser::where('id', $id)->delete();
        return redirect()->route('admin.typeuser.index');
    }
        
}
