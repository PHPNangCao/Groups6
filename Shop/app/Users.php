<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    public function typeuser(){
        return $this->belongsTo('APP\TypeUser','user_id', 'id');
    }

    public function userrole(){
        return $this->hasMany('APP\Userrole','user_id', 'id');
    }
}
