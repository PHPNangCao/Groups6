@extends('api-admin.master')
@section('title','Danh sách sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{route('admin.product.create')}}">Thêm Sản phẩm </a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Tên Sản phẩm </th>
                    <th>Mô Tả</th>
                    <th>Hình ảnh</th>
                    <th>Loại Sản phẩm</th>
                    <th>Đơn vị tính</th> 
                    <th>Trạng Thái</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($SanPham as $SP)
                <tr> 
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $SP->ten }}</td>
                    <td>{{ $SP->mota }}</td>
                    <td><img src="public/upload/product/{{$SP->anh}}" alt="" height="100px"></td>
                    <td>{{ $SP->loaisanpham_id }}</td>
                    <td>{{ $SP->donvitinh_id }}</td>
                    {{-- <td>
                        @if( $SP->donvitinh_id == {{$DVT->id}})
                            {{($DVT->ten)}}
                        @endif
                    </td>                     ==> đang fix 
                    --}} 
                    <td>
                        <select {{ $SP->trangthai }}>
                                  <option value="1"  selected> Còn Hàng</option>
                                  <option value="0"  > Hết Hàng</option>
                        </select>
                    </td>
                    <td><a href="{{route('admin.product.edit',['id' => $SP->id])}}">Sửa</a></td>
                    <td><a href="{{route('admin.product.destroy',['id' => $SP->id])}}" onclick="return checkDelete('Bạn có muốn xóa sản phẩm này không?')">Xoá</a></td>
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