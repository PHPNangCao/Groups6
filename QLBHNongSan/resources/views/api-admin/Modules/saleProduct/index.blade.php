<!-- đây là bảng Khách hàng -->

@extends('api-admin.master')
@section('title','Danh sách khuyến mãi')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thông tin khuyến mãi <a href="{{route('admin.saleproduct.create')}}">Thêm mới</a></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.saleproduct.index')}}" method="POST">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Khuyến mãi</th>
                        <th>Sản phẩm</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($khuyenmaisanpham as $kmsp)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{ $kmsp->tieude }}</td>
                        <td>{{ $kmsp->noidung }}</td>
                        <td><a href="{{route('admin.saleproduct.edit',['id' => $kmsp->id])}}">Edit</a></td>
                        <td><a href="{{route('admin.saleproduct.destroy',['id' => $kmsp->id])}}" onclick="return checkDelete('Bạn có muốn xóa thông tin khách hàng này không?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                    <th>ID</th>
                        <th>Khuyến mãi</th>
                        <th>Sản phẩm</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>

@endsection