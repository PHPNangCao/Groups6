<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $table = "shipment";

    public function shipment_detail(){
        return $this->hasMany('App\ShipmentDetail','shipment_id','id');
    }

    public function Supplier(){
        return $this->belongsTo('App\Supplier','supplier_id','id');
    }
}
