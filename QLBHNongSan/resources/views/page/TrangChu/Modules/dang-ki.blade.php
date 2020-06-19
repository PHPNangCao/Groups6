@extends('page.master')
@section('content')
<form action="{{route('xulydangki')}}" method="POST" style="text-align: center">
    @csrf
    <div class="form-group">
        <label>Họ và tên <input type="text" name="ten" class="form-control" placeholder="Họ và tên . . ."></label>
    </div>
    <div class="form-group">
        <label for="inputEmail4">Email <input type="email" class="form-control" name="email" placeholder="Email . . ."></label>
    </div>
    <div class="form-group">
        <label>Email <input type="password" class="form-control" name="matkhau" placeholder="Mật khẩu . . ."></label>
    </div>
    <div class="form-group">
        <label>Số điện thoại <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại . . ."></label>
    </div>
    <div class="form-group">
        <label>Địa Chỉ <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ . . ."></label>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">ĐĂNG KÍ THÔNG TIN</button>
    </div>
    
    
</form>
@endsection