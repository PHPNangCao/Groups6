@extends('page.master')
@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Shopping Cart</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Shopping Cart</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        
        <div class="table-responsive">
            <!-- Shop Products Table -->
            <table class="shop_table beta-shopping-cart-table" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-name">Sản phẩm</th>
                        <th class="product-price">Giá</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="product-subtotal">Giá</th>
                        <th class="product-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td class="product-name">
                            <div class="media">
                                <img class="pull-left" src="upload/product/cai-ngot.jpg" alt="" width="60">
                                <div class="media-body">
                                    <p class="font-large table-title">Men’s Belt</p>
                                    <p class="table-option">Color: Red</p>
                                    <p class="table-option">Size: M</p>
                                </div>
                            </div>
                        </td>

                        <td class="product-price">
                            <span class="amount">$235.00</span>
                        </td>

                        <td class="product-quantity">
                            <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
                        </td>

                        <td class="product-subtotal">
                            <span class="amount">$235.00</span>
                        </td>

                        <td class="product-remove">
                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End of Shop Table Products -->
        </div>


        <!-- Cart Collaterals -->
        <div class="cart-collaterals">
            <div class="cart-totals pull-right">
                <div class="cart-totals-row"><h5 class="cart-total-title">Cart Totals</h5></div>
                <div class="cart-totals-row"><span>Tổng số lượng:</span> <span>$188.00</span></div>
                <div class="cart-totals-row"><span>Tổng tiền:</span> <span>Free Shipping</span></div>
                <div class="cart-totals-row"><span>Order Total:</span> <span>$188.00</span></div>
            </div>

            <div class="clearfix"></div>
        </div>
        <!-- End of Cart Collaterals -->
        <div class="clearfix"></div>

    </div> <!-- #content -->
</div> <!-- .container -->
@endsection