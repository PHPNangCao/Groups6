@extends('admin.header')
@section('content')
<div id="layoutSidenav_content">

    <main>  
        <div class="container-fluid">
        <h1 class="mt-4">Thêm Sản Phẩm</a> </h1>
            
          <form action="" method="POST">
            <div class="form-group">
              <label>Tên Sản Phẩm</label>
              <input type="text" class="form-control" name="tennsp" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
              <label>Giá Tiền</label>
              <input type="text" class="form-control" name="giatiensp" placeholder="Giá">
            </div>
            <div class="form-group">
                <label>Loại Sản Phẩm</label>
                <input type="text" class="form-control" name="loaisp" placeholder="Loại sản phẩm">
              </div>
            <div class="form-group">
                <label>Đơn Vị Tính</label>
                <br>
                <input type="radio" name="kl" value="1"/> KG
                {{-- <br>
                <input type="radio" name="kl" value="2"/> 
                <br>
                <input type="radio" name="kl" value="3"/>  --}}
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
          </form>
            
        </div>
    </main>
</div>

@endsection