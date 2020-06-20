@extends('api-admin.master')
@section('title','Tạo Đơn vị tính')
@section('content')
<form action="{{ route ('admin.unit.store')}}"" method = "POST" >
    @csrf
    <div class="form-group">
      <label >Tên đơn vị tính :</label>
      <input type="text" class="form-control" name="ten" placeholder="Tên đơn vị tính">
    </div>
    <div class="form-product">
        <label>Mô tả</label>
        <textarea class="form-control" name="mota" rows="3" placeholder="Mô tả"></textarea>
    </div>
    <hr>
    <button type="submit" class="btn btn-default">Lưu thông tin</button>
  </form>

@endsection