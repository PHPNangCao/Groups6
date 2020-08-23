<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $user = User::orderBy('id', 'DESC')->get();
        return view('api-admin.modules.user.index',compact('user'));
    }

    public function create()
    {
        $user = User::get();
        return view('api-admin.modules.user.create',compact('user'));
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

        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        $data['password'] = bcrypt($request->password);

        User::insert($data);

        return redirect()->route('admin.user.index');
    }

    public function status($id)
    {
        $product = User::find($id);
        $product->status = ! $product->status;
        $product->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('api-admin.modules.user.edit',compact('user'));
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

        $data = $request->except('_token');
        $data['updated_at'] = new DateTime;
        $data['password'] = bcrypt($request->password);
        User::where('id',$id)->update($data);

        return redirect()->route('admin.user.index');
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('admin.user.index');
    }
}
