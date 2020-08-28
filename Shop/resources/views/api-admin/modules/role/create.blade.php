@extends('api-admin.master')
@section('title','Thêm Role')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm Role</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.role.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Vai Trò<span class="text-danger">(*)</label>
                <input type="text" name="name" class="form-control" placeholder="Vai Trò...">
                @if ($errors->has('name'))
                    <div class="text-danger">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Hiển Thị<span class="text-danger">(*)</label>
                <input type="text" name="display_name" class="form-control" placeholder="display_name">
                @if ($errors->has('display_name'))
                    <div class="text-danger">
                        {{$errors->first('display_name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Mô Tả</label>
                <input type="text" class="form-control" name="description">
            </div>
            <hr>
            <div>
                <a href="{{route('admin.role.index')}}" class="btn btn-warning">Quay Lại</a>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
</div>
@endsection
