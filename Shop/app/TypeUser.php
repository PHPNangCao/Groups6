<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $table = "type_user";

    public function users(){
        return $this->hasMany('APP\Users','user_id', 'id'); 
    }
}
