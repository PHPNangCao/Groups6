<?php
namespace App;
class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart)
    {
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }

    public function AddCart($product, $id){
        $SMprice = 0;
        if($product->promotion_price == 0){
            $SMprice = $product->unit_price;
        }else{
            $SMprice = $product->promotion_price;
        }

        $newProduct = ['quanty' => 0, 'price' => $SMprice,'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $products)){
                // nếu tồn tại cái key (id) trong product thì
                $newProduct = $products[$id];
            }
        }
        $newProduct['quanty']++;
        $newProduct['price'] = $newProduct['quanty'] * $SMprice;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $SMprice;
        $this->totalQuanty++;
    }
}
?>