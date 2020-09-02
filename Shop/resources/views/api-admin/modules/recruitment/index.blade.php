@extends('api-admin.master')
@section('title','Danh Sách Bảng Tin Tuyển Dụng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.recruitment.create')}}" class="btn btn-info">Thêm bài tuyển dụng</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Url</th>
                    <th>Nội dung</th>
                    <th>Trạng Thái</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">
                @foreach ($recruitment as $recruitment)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{!! Str::limit($recruitment->title,30,'...') !!}</td>
                    <td>{!! Str::limit($recruitment->url,30,'...') !!}</td>
                    <td>{!! Str::limit($recruitment->description,50,'...') !!}</td>
                    <td>
                        @if ($recruitment->status == 1)
                            <a href="{{route('admin.recruitment.status',['id' => $recruitment->id])}}" class="btn btn-success">Hiện</i></a>
                        @else
                            <a href="{{route('admin.recruitment.status',['id' => $recruitment->id])}}" class="btn btn-danger">Ẩn</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.recruitment.edit',['id' => $recruitment->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.recruitment.destroy',['id' => $recruitment->id])}}" onclick="return checkDelete('Bạn có muốn xóa tin tức này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection