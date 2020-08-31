<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function product(){
        return $this->hasMany('App\Comment','product_id','id');
    }

    public function category(){
        return $this->belongsTo('App\Category','category_id','id');
    } 

    public function bill_detail(){
        return $this->hasMany('App\BillDetail','product_id','id');
    }

    public function shipment_detail(){
        return $this->hasMany('App\ShipmentDetail','product_id','id');
    }
}
