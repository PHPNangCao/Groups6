@extends('api-admin.master')
@section('title','Sửa Thông Tin Nhóm Phân Quyền')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa Thông Tin Nhóm Phân Quyền</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.grouppermission.update', ['id' => $group_permission->id])}}" method="POST">
            @csrf
            <div class="form-product">
                <label>Vai Trò<span class="text-danger">(*)</label>
                <input type="text" name="name" class="form-control" placeholder="Vai Trò..." value="{{$group_permission->name}}">
                @if ($errors->has('name'))
                    <div class="text-danger">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-product">
                <label>Mô Tả</label>
                <input type="text" class="form-control" name="description" value="{{$group_permission->description}}">
            </div>
            <hr>
            <div>
                <a href="{{route('admin.grouppermission.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
</div>


@endsection
