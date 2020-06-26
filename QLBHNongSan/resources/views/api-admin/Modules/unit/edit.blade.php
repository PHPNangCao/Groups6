@extends('api-admin.master')
@section('title','Sửa thông tin Đơn Vị Tính')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.unit.update',['id' => $DonViTinh->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên Đơn Vị Tính</label>
            <input type="text" name="ten" class="form-control" placeholder="Tên đơn vị tính" value="{{$DonViTinh->ten}}">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
            <textarea class="form-control" name="mota" rows="3" placeholder="Mô tả">{{$DonViTinh->mota}}</textarea>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>    
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer--> 
</div>
@endsection