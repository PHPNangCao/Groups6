<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Role extends Model
    {
        protected $table = "role";

        public function permission(){
            return $this->belongsToMany(Permission::class, 'role_pemission', 'id');
        }

    }
?>
