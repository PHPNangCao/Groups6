@extends('api-admin.master')
@section('title','Sửa thông tin quảng cáo')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa thông tin quảng cáo</h3>
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
                <input type="file" class="form-control-file" name="anh" value="{{$quangcao->anh}}">
            </div>
            <div class="form-group">
                <label>Trạng Thái</label>
                <input type="checkbox" name="trangthai" value="1"  {{ ($quangcao->trangthai== 1) ? 'checked' : ''}} />ON
                <input type="checkbox" name="trangthai" value="1"  {{ ($quangcao->trangthai== 1) ? 'checked' : ''}} />OFF
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