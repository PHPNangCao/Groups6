<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipmentDetail extends Model
{
    protected $table = "shipment_detail";

    public function product(){
        return $this->belongsTo('APP\Product','product_id','id');
    }

    public function shipment(){
        return $this->belongsTo('App\Shipment','shipment_id','id');
    }
}
