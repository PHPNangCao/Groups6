@extends('api-admin.master')
@section('title','Sửa thông tin khách hàng')
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sửa thông tin khách hàng</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.customer.update',['id' => $customer->id])}}"  enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label>Tên khách hàng <span class="text-danger">(*)</label>
                <input type="text" name="name" class="form-control" placeholder="Tên khách hàng" value="{{$customer->name}}">
                @if ($errors->has('name'))
                        <div class="text-danger">
                            {{$errors->first('name')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Giới Tính<span class="text-danger">(*)</label>
                <input type="checkbox" name="gender" value="1" value="{{$customer->gender}}">Nam
                <input type="checkbox" name="gender" value="0" value="{{$customer->gender}}">Nữ
                @if ($errors->has('gender'))
                        <div class="text-danger">
                            {{$errors->first('gender')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Email<span class="text-danger">(*)</label>
                <input type="email" name="email" class="form-control" placeholder="email" value="{{$customer->email}}">
                @if ($errors->has('email'))
                        <div class="text-danger">
                            {{$errors->first('email')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Địa chỉ <span class="text-danger">(*)</label>
                <input type="text" name="address" class="form-control" placeholder="Địa Chỉ" value="{{$customer->address}}">
                @if ($errors->has('address'))
                        <div class="text-danger">
                            {{$errors->first('address')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Phone <span class="text-danger">(*)</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{$customer->phone}}">
                @if ($errors->has('phone'))
                        <div class="text-danger">
                            {{$errors->first('phone')}}
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label>Ghi Chú</label>
                <textarea class="form-control" name="note" rows="3" placeholder="Mô tả" value="{{$customer->note}}"></textarea>
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
