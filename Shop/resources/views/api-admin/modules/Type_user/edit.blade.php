@extends('api-admin.master')
@section('title','Sửa User')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa User</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.typeuser.update',['id' => $typeuser->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label>User<span class="text-danger">(*)</label>
                <select name="user_id" class="form-control col-md-4">
                    <option value="">----Chọn User----</option>
                    @foreach ($user as $user)
                <option value="{{$user->id}}" selected ="{{$typeuser->user_id}}">{{$user->email}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-product">
                <label for=""> Loại User <span class="text-danger">(*)</span></label>
                <select name="type_user" id="">
                    <option value="Admin">Admin</option>
                    <option value="Staff">Staff</option>
                </select>
                
            </div>
            
            <hr>
            <a href="{{route('admin.typeuser.index')}}" class="btn btn-warning">Quay Lại</a>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>


@endsection