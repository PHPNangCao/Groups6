<!-- đây là bảng Khách hàng -->

@extends('api-admin.master')
@section('title','Danh sách quảng cáo')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thông tin quảng cáo <a href="{{route('admin.promotional.create')}}">Thêm mới</a></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.promotional.index')}}" method="POST">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Trạng Thái</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quangcao as $qc)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{ $qc->anh }}</td>
                        <td>{{ $qc->trangthai }}</td>
                    <td><a href="{{route('admin.promotional.edit',['id' => $qc->id])}}">Edit</a></td>
                        <td><a href="{{route('admin.promotional.destroy',['id' => $qc->id])}}" onclick="return checkDelete('Bạn có muốn xóa thông tin khách hàng này không?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Trạng Thái</th>
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