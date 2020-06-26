@extends('api-admin.master')
@section('title','Thêm mới lô đặt hàng')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm lô hàng sản phẩm</h3>
    </div>
    <div class="card-body">
        <form action="{{route('admin.lot-order.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên LÔ HÀNG</label>
                <input type="text" name="ten" class="form-control" placeholder="Tên lô hàng sản phẩm">
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
            <div class="form-group">
                <label>Nhà Cung Cấp</label>
                <select name="nhacungcap_id" class="form-control">
                <option >----Chọn nhà cung cấp----</option>
                @foreach ($NhaCungCap as $NhaCC)
                    <option value="{{$NhaCC->id}}">{{$NhaCC->ten}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Ngày sử dụng</label>
                <input type="text" name="ngaysudung" class="form-control" placeholder="Ngày sử dụng">
            </div>
            <div class="form-group">
                <label>GIá mua vào</label>
                <input type="text" name="giamuavao" class="form-control" placeholder="giá mua vào">
            </div>
            <div class="form-group">
                <label>GIá bán ra</label>
                <input type="text" name="giabanra" class="form-control" placeholder="giá bán ra">
            </div>
            <div class="form-group">
                <label>Số Lượng Nhập</label>
                <input type="text" name="soluongnhap" class="form-control" placeholder="Số lượng nhập">
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