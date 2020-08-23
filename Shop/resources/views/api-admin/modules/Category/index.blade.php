@extends('api-admin.master')
@section('title','Danh sách loại sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.category.create')}}" class="btn btn-info">Thêm Loại Sản phẩm</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Url</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">
                @foreach ($category as $cate)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $cate->name }}</td>
                    <td>{{ $cate->url }}</td>
                    <td>{!! $cate->description !!}</td>
                    <td><img src="upload/category/{{$cate->image}}" alt="" height="100px"></td>
                    <td>
                        @if ($cate->status == 1)
                            <a href="{{route('admin.category.status',['id' => $cate->id])}}" class="btn btn-success">Show</i></a>
                        @else
                            <a href="{{route('admin.category.status',['id' => $cate->id])}}" class="btn btn-danger">Hide</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.category.edit',['id' => $cate->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.category.destroy',['id' => $cate->id])}}" onclick="return checkDelete('Bạn có muốn xóa loại sản phẩm này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection