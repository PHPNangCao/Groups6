@extends('api-admin.master')
@section('title','Sửa món ngon')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa món ngon</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.recruitment.update',['id' => $monngon->id])}}" method="POST">
            @csrf
            <div class="form-product">
                <label >Tiêu đề</label>
                <input type="text" name="tieude" class="form-control" value="{{$monngon->tieude}}">
            </div>
            <div class="form-product">
                <label >Tóm tắt</label>
                <input type="text" name="tomtat" class="form-control" value="{{$monngon->tomtat}}">
            </div>
            <div class="form-product">
                <label >Nội dung</label>
                <textarea type="text" name="noidung" class="form-control" >{{$monngon->noidung}}</textarea>
            </div>
            <div class="form-product">
                <label >Ảnh</label>
                <input type="file" name="anh" class="form-control-file" value="{{$monngon->anh}}">
            </div>
            <div class="form-product">
                <label >Trạng thái</label>
                    <input type="radio" name="trangthai" value="1" {{  ($monngon->trangthai == 1 ? ' checked' : '') }}>Mở
                    <input type="radio" name="trangthai" value="0" {{  ($monngon->trangthai == 0 ? ' checked' : '') }}>Ẩn
            </div>
            <div class="form-product">
                <label >Sản phẩm: </label>
                <select name="sanpham_id" class="form-control">
                    {{-- <option value="{{$sanpham->id}}">{{$sanpham->ten}}</option>
                    @foreach($sanpham as $sp)
                    <option value="{{$sanpham->id}}">{{$sanpham->ten}}</option>
                    @endforeach --}}
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>    
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
@endsection