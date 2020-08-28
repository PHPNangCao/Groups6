@extends('api-admin.master')
@section('title','Sửa User')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa User</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.user.update',['id' => $user->id])}}" method="POST">
            @csrf
            <div class="form-product">
                <label>Tên<span class="text-danger">(*)</label>
                <input type="text" name="name" class="form-control" placeholder="Tên..." value="{{$user->name}}">
                @if ($errors->has('name'))
                    <div class="text-danger">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-product">
                <label>Email <span class="text-danger">(*)</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                @if ($errors->has('email'))
                <div class="text-danger">
                    {{$errors->first('email')}}
                </div>
                @endif
            </div>
            <div class="form-product">
                <label>Mật khẩu <span class="text-danger">(*)</label>
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" >
                @if ($errors->has('password'))
                        <div class="text-danger">
                            {{$errors->first('password')}}
                        </div>
                @endif
            </div>

            <div class="form-product">
                <label>Số điện thoại<span class="text-danger">(*)</label>
                <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{$user->phone}}">
                @if ($errors->has('phone'))
                        <div class="text-danger">
                            {{$errors->first('phone')}}
                        </div>
                @endif
            </div>

            <div class="form-product">
                <label>Địa chỉ<span class="text-danger">(*)</label>
                <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" value="{{$user->address}}">
                @if ($errors->has('address'))
                        <div class="text-danger">
                            {{$errors->first('address')}}
                        </div>
                @endif
            </div>
            <hr>
            <a href="{{route('admin.user.index')}}" class="btn btn-warning">Quay Lại</a>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>


@endsection
