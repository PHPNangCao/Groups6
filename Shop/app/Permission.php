<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Permission extends Model
    {
        protected $table = "permission";

        public function roles(){
            return $this->hasMany('App\Role');
        }
    }

?>
