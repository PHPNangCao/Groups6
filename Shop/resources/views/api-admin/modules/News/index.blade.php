@extends('api-admin.master')
@section('title','Danh sách loại sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.news.create')}}" class="btn btn-info">Thêm tin tức</a>
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
                    <th>Ảnh</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">
                @foreach ($news as $news)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->url }}</td>
                    <td>{!! $news->content !!}</td>
                    <td><img src="upload/news/{{$news->image}}" alt="" height="100px"></td>
                    <td>
                        <a href="{{route('admin.news.edit',['id' => $news->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.news.destroy',['id' => $news->id])}}" onclick="return checkDelete('Bạn có muốn xóa loại sản phẩm này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection