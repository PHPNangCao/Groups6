<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Role extends Model
    {
        protected $table = "role";

        public function permission(){
            return $this->belongsToMany('APP\Permission', 'role_pemission', 'id');
        }

        public function users(){
            return $this->hasMany('APP\User');
        }

    }
?>
