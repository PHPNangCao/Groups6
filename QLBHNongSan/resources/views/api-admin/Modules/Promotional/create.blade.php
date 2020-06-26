@extends('api-admin.master')
@section('title','Thêm quảng cáo')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm quảng cáo</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.promotional.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Ảnh</label>
                <input type="file" class="form-control-file" name="anh">
            </div>
            <div class="form-group">
                <label>Trạng Thái</label>
                <input type="checkbox" name="trangthai" value="1"/>ON
                <input type="checkbox" name="trangthai" value="1"/>OFF
            </div>
            <div class="form-group">
                <label>Khuyến mãi</label>
                <select name="khuyenmai_id" class="form-control">
                <option >----Chọn Khuyến mãi----</option>
                @foreach ($khuyenmai as $km)
                  <option value="{{$km->id}}"> {{$km->noidung}}</option>                    
                @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>

@endsection