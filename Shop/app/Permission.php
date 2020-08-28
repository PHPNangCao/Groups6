<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Permission extends Model
    {
        protected $table = "permission";

        public function roles(){
            return $this->belongsToMany(Role::class, 'role_pemission', 'id');
        }
    }

?>
