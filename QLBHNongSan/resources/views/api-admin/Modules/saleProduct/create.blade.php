@extends('api-admin.master')
@section('title','Thêm thông tin khuyến mãi')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm thông tin khuyến mãi</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.saleproduct.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Thông tin khuyến mãi</label>
                <input type="text" class="form-control-file" name="tieude">
            </div>
            <div class="form-group">
                <label>Khuyến mãi ID</label>
                <select name="khuyenmai_id" class="form-control">
                <option >----Chọn nhà khuyến mãi----</option>
                @foreach ($khuyenmai as $km)
                    <option value="{{$km->id}}">{{$km->ten}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Sản phẩm</label>
                <select name="sanpham_id" class="form-control">
                <option >----Chọn sản phẩm----</option>
                @foreach ($SanPham as $SP)
                    <option value="{{$SP->id}}">{{$SP->ten}}</option>
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