<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "supplier";

    public function shipment(){
        return $this->hasMany('App\Shipment','shipment_id','id');
    }
}
