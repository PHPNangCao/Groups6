@extends('admin.header')
@section('content')
<div id="layoutSidenav_content">

    <main>  
        <div class="container-fluid">
        <h1 class="mt-4">Thêm nhà cung cấp</a> </h1>
            
          <form action="" method="POST">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="tenncc" placeholder="Tên nhà cung cấp">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="diachincc" placeholder="Địa chỉ">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="int" class="form-control" name="sdtncc" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
            
        </div>
    </main>
</div>

@endsection