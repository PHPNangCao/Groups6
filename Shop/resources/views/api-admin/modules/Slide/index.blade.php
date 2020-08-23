@extends('api-admin.master')
@section('title','Danh sách Slide')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.slide.create')}}" class="btn btn-info">Thêm Slide</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Url</th>
                    <th>Ảnh</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">
                @foreach ($slide as $slide)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $slide->url }}</td>
                    <td><img src="upload/slide/{{$slide->image}}" alt="" height="100px"></td>
                    <td>
                        <a href="{{route('admin.slide.destroy',['id' => $slide->id])}}" onclick="return checkDelete('Bạn có muốn xóa loại sản phẩm này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection