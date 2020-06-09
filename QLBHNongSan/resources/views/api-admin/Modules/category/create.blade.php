@extends('api-admin.master')
@section('title','Thêm thể loại')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.category.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" name="ten" class="form-control" placeholder="Name Category">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="mota" class="form-control" placeholder="Name Category">
            </div>
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