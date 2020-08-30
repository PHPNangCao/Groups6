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
            <div class="form-group">
                <label>Quyền<span class="text-danger">(*)</label>
                <input type="text" name="name" class="form-control" placeholder="Vai Trò...">
                @if ($errors->has('name'))
                    <div class="text-danger">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Quyền hiển thị<span class="text-danger">(*)</label>
                <input type="text" name="display_name" class="form-control" placeholder="Vai Trò...">
                @if ($errors->has('display_name'))
                    <div class="text-danger">
                        {{$errors->first('display_name')}}
                    </div>
                @endif
            </div>
            <hr>
            <div>
                <a href="{{route('admin.permission.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
</div>
@endsection
