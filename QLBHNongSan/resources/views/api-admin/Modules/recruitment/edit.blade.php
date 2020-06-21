@extends('api-admin.master')
@section('title','Sửa món ngon')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa món ngon</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.recruitment.update')}}" method="POST">
            @csrf
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề </th>
                    <th>Tóm tắt</th>
                    <th>Nội dung</th>
                    <th>Lượt xem</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($monngon as $mn)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mn->tieude }}</td>
                    <td>{{ $mn->tomtat }}</td>
                    <td>{{ $mn->noidung }}</td>
                    <td>{{ $mn->luotxem }}</td>
                    <td>{{ $mn->anh }}</td>
                    <td>{{ $mn->trangthai }}</td>
                    <td>{{ $mn->loainguoidung_id }}</td>
                    <td><a href="{{route('admin.recruitment.edit',['id' => $mn->id])}}">Sửa</a></td>
                    <td><a href="{{route('admin.recruitment.destroy',['id' => $mn->id])}}" onclick="return checkDelete('Bạn có muốn xóa món ngon này không?')">Xóa</a></td>
                </tr>
                @endforeach
            </tbody>
        </form>    
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
@endsection