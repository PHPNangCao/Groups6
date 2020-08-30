<div class="panel" id="tab-reviews">
    <form action="{{route('admin.comment.store')}}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="feedback" name="rating" >
                        <p>Mời bạn chọn sao để đánh giá<span class="text-danger">(*)</p>
                        @include('page.rate');
                        @if ($errors->has('rating'))
                            <div class="text-danger">
                                {{$errors->first('rating')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Tên:<span class="text-danger">(*)</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập vào họ tên...">
                        @if ($errors->has('name'))
                            <div class="text-danger">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại:</label>
                        <input type="text" name="phone" class="form-control" placeholder="Nhập vào số điện thoại...">
                        @if ($errors->has('phone'))
                            <div class="text-danger">
                                {{$errors->first('phone')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Gửi đánh giá:<span class="text-danger">(*)</label>
                        <textarea type="text" name="description" class="form-control" placeholder="Nhập đánh giá..."></textarea>
                        @if ($errors->has('description'))
                            <div class="text-danger">
                                {{$errors->first('description')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="product_id" class="form-control" value="{{$sanpham->id}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                </div>
            </div>
        </div>
    </form>
    <div class="container">
        <h6><strong> Đánh giá của khách:</strong></h6>
    </div>
    <div class="container">
        <div class="col-8">
            <div class="panel-default">
                <div class="panel-body">
                    <div class="border border-dark">
                        @foreach ($comment as $cmt)
                        <div>
                            <span><strong> </strong>{{$cmt->phone}}</span>
                        </div>
                        <div>
                            @for ($i = 0; $i < $cmt->rating; $i++)
                                <span class="fa fa-star checked"></span>
                            @endfor
                            
                            @for ($i = 0; $i < 5- $cmt->rating; $i++)
                                <span class="fa fa-star"></span>
                            @endfor
                        </div>
                        <div>
                            <span>{{$cmt->description}}</span>
                        </div>
                        @endforeach
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>