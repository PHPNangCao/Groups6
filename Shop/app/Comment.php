<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";

    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
}
