@extends('api-admin.master')
@section('title','Thêm Phân Quyền')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm Nhóm Phân Quyền</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.permission.store')}}" method="POST">
            @csrf
            <div class="form-product">
                <label>Quyền<span class="text-danger">(*)</label>
                <input type="text" name="name" class="form-control" placeholder="Vai Trò...">
                @if ($errors->has('name'))
                    <div class="text-danger">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-product">
                <label>Quyền hiển thị<span class="text-danger">(*)</label>
                <input type="text" name="display_name" class="form-control" placeholder="Vai Trò...">
                @if ($errors->has('display_name'))
                    <div class="text-danger">
                        {{$errors->first('display_name')}}
                    </div>
                @endif
            </div>
            <div class="form-product">
                <label>Nhóm Phân Quyền<span class="text-danger">(*)</label>
                <select name="group_permission_id" class="form-control">
                    <option value="">----Chọn nhóm Phân Quyền----</option>
                        @foreach ($group_permission as $gr)
                            <option value="{{$gr->id}}">{{$gr->name}}</option>
                        @endforeach
                </select>
            </div>
            <hr>
            <div>
                <a href="{{route('admin.grouppermission.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
</div>
@endsection
