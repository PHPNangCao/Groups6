@extends('api-admin.master')
@section('title','Thêm loại khách hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Thêm thông tin khách hàng</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.customer.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên khách hàng <span class="text-danger">(*)</label>
                <input type="text" name="name" class="form-control" placeholder="Tên khách hàng">
                @if ($errors->has('name'))
                        <div class="text-danger">
                            {{$errors->first('name')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Giới Tính<span class="text-danger">(*)</label>
                <input type="checkbox" name="gender" value="1">Nam
                <input type="checkbox" name="gender" value="0">Nữ
                @if ($errors->has('gender'))
                        <div class="text-danger">
                            {{$errors->first('gender')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Email<span class="text-danger">(*)</label>
                <input type="text" name="email" class="form-control" placeholder="email">
                @if ($errors->has('email'))
                        <div class="text-danger">
                            {{$errors->first('email')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Địa chỉ <span class="text-danger">(*)</label>
                <input type="text" name="address" class="form-control" placeholder="Địa Chỉ">
                @if ($errors->has('address'))
                        <div class="text-danger">
                            {{$errors->first('address')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Phone <span class="text-danger">(*)</label>
                <input type="text" name="Phone" class="form-control" placeholder="Phone">
                @if ($errors->has('Phone'))
                        <div class="text-danger">
                            {{$errors->first('Phone')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Ghi Chú</label>
                <textarea class="form-control" name="note" rows="3" placeholder="Mô tả"></textarea>
                <script>
                    CKEDITOR.replace( 'note' );
                </script>
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
