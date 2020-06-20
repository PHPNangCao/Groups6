@extends('api-admin.master')
@section('title','Thêm sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm sản phẩm</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.product.store')}}" method="POST">
            @csrf
            <div class="form-product">
                <label>Tên sản phẩm</label>
                <input type="text" name="ten" class="form-control" placeholder="Tên sản phẩm">
            </div>
            <div class="form-product">
                <label>Mô tả</label>
                <textarea class="form-control" name="mota" rows="3" placeholder="Mô tả"></textarea>
            </div>
            <div class="form-product">
                <label>Ảnh</label>
                <input type="file" class="form-control-file" name="anh">
              </div>

              <div class="form-product">
                <label>Khối Lượng</label>
                <input type="text" class="form-control-file" name="donvitinh_id">
              </div>

              <div class="form-group">
                <label>Loại sản phẩm</label>
                <select name="nhom_id" class="form-control">
                <option >----Chọn loại sản phẩm----</option>
                @foreach ($LoaiSanPham as $LoaiSP)
                    <option value="{{$LoaiSP->id}}">{{$LoaiSP->ten}}</option>
                @endforeach
                </select>
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