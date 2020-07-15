@extends('api-admin.master')
@section('title','Danh sách loại sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{route('admin.category.create')}}">Thêm Loại Sản phẩm</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Nhóm SP</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead> 
            <tbody>
                @foreach ($LoaiSanPham as $LoaiSP)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $LoaiSP->ten }}</td>
                    <td>{{ $LoaiSP->nhom_id }} </td>
                    <td>{{ $LoaiSP->mota }}</td>
                    <td><img src="public/upload/category/{{$LoaiSP->anh}}" alt="" height="100px"></td>
                    <td>
                        @if ($LoaiSP->trangthai == 1)
                            Còn hàng
                        @else
                            Hết hàng
                        @endif
                    </td>
                    <td><a href="{{route('admin.category.edit',['id' => $LoaiSP->id])}}">Sửa</a></td>
                    <td><a href="{{route('admin.category.destroy',['id' => $LoaiSP->id])}}" onclick="return checkDelete('Bạn có muốn xóa loại sản phẩm này không?')">Xóa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
</div>

@endsection