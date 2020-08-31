@extends('api-admin.master')
@section('title','Danh sách bài viết Món Ngon')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.food.create')}}" class="btn btn-info">Thêm bài viết</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Ghi Chú</th>
                    <th>Nội dung</th>
                    <th>Ảnh</th>
                    <th>Trạng Thái</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">
                @foreach ($food as $food)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{!! Str::limit($food->title,30,'...') !!}</td>
                    <td>{!! Str::limit($food->note,30,'...') !!}</td>
                    <td>{!! Str::limit($food->content,50,'...') !!}</td>
                    <td><img src="upload/food/{{$food->image}}" alt="" height="100px"></td>
                    <td>
                        @if ($food->status == 1)
                            <a href="{{route('admin.food.status',['id' => $food->id])}}" class="btn btn-success">Hiện</i></a>
                        @else
                            <a href="{{route('admin.food.status',['id' => $food->id])}}" class="btn btn-danger">Ẩn</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.food.edit',['id' => $food->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.food.destroy',['id' => $food->id])}}" onclick="return checkDelete('Bạn có muốn xóa bài viết này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection