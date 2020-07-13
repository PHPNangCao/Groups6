<!-- đây là bảng Khách hàng -->

@extends('api-admin.master')
@section('title','Danh sách khuyến mãi')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thông tin khuyến mãi <a href="{{route('admin.sale.create')}}">Thêm mới</a></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.sale.index')}}" method="POST">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Ảnh</th>
                        <th>Trình trạng</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($khuyenmai as $km)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{ $km->tieude }}</td>
                        <td>{{ $km->noidung }}</td>
                        <td><img src="public/upload/sale/{{$km->anh}}" alt="" height="100px"></td>
                        <td>{{ $km->tinhtrang }}</td>
                        <td><a href="{{route('admin.sale.edit',['id' => $km->id])}}">Edit</a></td>
                        <td><a href="{{route('admin.sale.destroy',['id' => $km->id])}}" onclick="return checkDelete('Bạn có muốn xóa thông tin khách hàng này không?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Ảnh</th>
                        <th>Trình trạng</th>
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