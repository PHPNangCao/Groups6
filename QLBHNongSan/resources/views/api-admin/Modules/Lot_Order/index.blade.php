@extends('api-admin.master')
@section('title','Danh sách lô đặt hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách lô đặt hàng <a href="{{route('admin.lot-order.create')}}">Thêm mới</a></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Lô Hàng</th>
                    <th>Ngày sử dụng</th>
                    <th>GIá mua vào</th>
                    <th>GIá bán ra</th>
                    <th>Số lượng nhập</th>
                    <th>Tình Trạng</th>
                    <th>Sản Phẩm</th>
                    <th>Nhà Cung Cấp</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($LoHang as $LH)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $LH->ten }}</td>
                    <td>{{ $LH->ngaysudung }}</td>
                    <td>{{ $LH->giamuavao }}</td>
                    <td>{{ $LH->giabanra }}</td>
                    <td>{{ $LH->soluongnhap }}</td>
                    <td>{{ $LH->tinhtrang }}</td>
                    <td>{{ $LH->sanpham_id }}</td>
                    <td>{{ $LH->nhacungcap_id }}</td>
                <td><a href="{{route('admin.lot-order.edit',['id' => $LH->id])}}">Edit</a></td>
                    <td><a href="{{route('admin.lot-order.destroy',['id' => $LH->id])}}" onclick="return checkDelete('Bạn có muốn xóa Lô hàng này không?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Tên Lô Hàng</th>
                    <th>Ngày sử dụng</th>
                    <th>GIá mua vào</th>
                    <th>GIá bán ra</th>
                    <th>Số lượng nhập</th>
                    <th>Tình Trạng</th>
                    <th>Sản Phẩm</th>
                    <th>Nhà Cung Cấp</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>

@endsection