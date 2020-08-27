@extends('api-admin.master')
@section('title','Danh sách sản phẩm')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <a href="{{route('admin.product.create')}}" class="btn btn-info">Thêm Sản phẩm</a>
        </h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
                <tr>
                    <th>STT</th>
                    <th>Thông Tin</th> <!--tên, giá bán, giá khuyến mãi, số lượng -->
                    <th>Loại Sản Phẩm</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Nổi Bật</th>
                    <th>Thao Tác</th>
                </tr>
            </thead> 
            <tbody style="text-align: center">
                @foreach ($product as $pro)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>
                        <p>{{ $pro->name}}</p>
                        <p>Giá bán: {{ number_format($pro->unit_price)}}</p>
                        <p>Sale: {{ number_format($pro->promotion_price)}}</p>                   
                    </td>
                    <td>{{ $pro->category->name }}</td>
                    {{-- <td>{!! $pro->description !!}</td> --}}
                    <td>{!! Str::limit($pro->description,50,'...') !!}</td>

                    <td><img src="upload/product/{{$pro->image}}" alt="" height="100px"></td>
                    <td>
                        @if ($pro->status == 1)
                            <a href="{{route('admin.product.status',['id' => $pro->id])}}" class="btn btn-success">Show</i></a>
                        @else
                            <a href="{{route('admin.product.status',['id' => $pro->id])}}" class="btn btn-danger">Hide</a>
                        @endif
                    </td>
                    <td>
                        @if ($pro->hot == 1)
                            <a href="{{route('admin.product.hot',['id' => $pro->id])}}" class="btn btn-success">Hot</i></a>
                        @else
                            <a href="{{route('admin.product.hot',['id' => $pro->id])}}" class="btn btn-danger">Hide</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.product.edit',['id' => $pro->id])}}" class="btn btn-success">Sửa <i class="fa fa-pencil"></a>
                        <a href="{{route('admin.product.destroy',['id' => $pro->id])}}" onclick="return checkDelete('Bạn có muốn xóa sản phẩm này không?')" class="btn btn-danger">Xóa <i class="fa fa-close"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection