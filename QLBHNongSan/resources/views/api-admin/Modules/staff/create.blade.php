@extends('api-admin.master')
@section('title','Thêm nhân viên')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm thông tin nhân viên</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.staff.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên nhân viên</label>
                <input type="text" name="ten" class="form-control" placeholder="Tên nhân viên">
            </div>
            <div class="form-group">
                <label>CMND</label>
                <input type="text" name="cmnd" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Số điện thoại </label>
                <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="diachi" class="form-control" placeholder="Địa Chỉ">
            </div>

            <div class="form-group">
                <label>Mã Số Nhân Viên</label>
                <input type="text" name="user_id" class="form-control" placeholder="Mã Số Nhân Viên">
            </div>
            {{-- <div class="form-group">
                <label>Mã Số Nhân Viên</label>
                <select name="user_id" class="form-control">
                @foreach ($DonViTinh as $DVT)
                    <option value="{{$DVT->id}}">{{$DVT->ten}}</option>
                @endforeach
                </select>
            </div> ==> đang check lại --}}
            <hr>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>

@endsection