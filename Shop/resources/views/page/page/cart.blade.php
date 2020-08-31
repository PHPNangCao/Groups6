<div class="beta-comp">
					
    <div class="cart">
    <div id="change_item_cart">

        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif) <i class="fa fa-chevron-down"></i></div>
        <div class="beta-dropdown cart-body">
        @if(Session::has('cart'))
        @foreach($product_cart as $product)
            <div class="cart-item">
                <a class="cart-item-delete" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-times"></i></a>
                <div class="media">
                    <a class="pull-left" href="#"><img src="upload/product/{{$product['item']['image']}}" alt=""></a>
                    <div class="media-body">
                        <span class="cart-item-title">{{$product['item']['name']}}</span>
                        <span class="cart-item-amount">{{$product['qty']}}*<span>@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} @else {{number_format($product['item']['promotion_price'])}}@endif</span></span>
                    </div>
                </div>
            </div>
        @endforeach
         <div class="cart-caption">
                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif đồng</span></div>
                <div class="clearfix"></div>
    </div>
                <div class="center">
                    <div class="space10">&nbsp;</div>
                    <a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

        @endif
        </div>
    </div> <!-- .cart -->
</div>
</div>