@extends('api-admin.master')
@section('title','Danh sách bình luận')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Tên khách</th>
                    <th>Số điện thoại</th>
                    <th>Đánh giá của khách</th>
                    <th>Rating</th>
                    <th>Sản phẩm</th>
                    <th>Trạng thái</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">
                @foreach ($comment as $cmt)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cmt->name }}</td>
                    <td>{{ $cmt->phone }}</td>
                    <td>{{ $cmt->description }}</td>
                    <td>
                        @for ($i = 0; $i < $cmt->rating; $i++)
                            <span class="fa fa-star checked"></span>
                        @endfor
                        
                        @for ($i = 0; $i < 5- $cmt->rating; $i++)
                            <span class="fa fa-star"></span>
                        @endfor
                    </td>
                    <td>{{ $cmt->product->name}}</td>
                    <td>
                        @if ($cmt->status == 1)
                            <a href="{{route('admin.comment.status',['id' => $cmt->id])}}" class="btn btn-success">Show</i></a>
                        @else
                            <a href="{{route('admin.comment.status',['id' => $cmt->id])}}" class="btn btn-danger">Hide</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.comment.edit',['id' => $cmt->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.comment.destroy',['id' => $cmt->id])}}" onclick="return checkDelete('Bạn có muốn xóa bình luận này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>3
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection