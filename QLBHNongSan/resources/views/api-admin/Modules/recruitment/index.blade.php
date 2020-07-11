@extends('api-admin.master')
@section('title','Danh sách tin tuyển dụng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách tin tuyển dụng <a href="{{route('admin.recruitment.create')}}">Thêm mới</a></h3>
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
                    <th>Tiêu đề </th>
                    <th>URL</th>
                    <th>Ảnh</th>
                    <th>Mổ tả</th>
                    <th>Liên hệ</th>
                    <td>Thời gian</td>
                    <td>Tình trạng</td>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tuyendung as $td)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $td->tieude }}</td>
                    <td>{{ $td->url }}</td>
                    <td>{{ $td->anh }}</td>
                    <td>{{ $td->mota }}</td>
                    <td>{{ $td->lienhe }}</td>
                    <td>{{ $td->created_at }}</td>
                    <td>
                        @if($td->tinhtrang == 1)
                            Đang còn tuyển
                        @else
                            Đang ngưng tuyển
                        @endif
                    </td>
                    <td><a href="{{route('admin.recruitment.edit',['id' => $td->id])}}">Sửa</a></td>
                    <td><a href="{{route('admin.recruitment.destroy',['id' => $td->id])}}" onclick="return checkDelete('Bạn có muốn xóa bài tin này không?')">Xóa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->

</div>
@endsection