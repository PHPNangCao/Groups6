<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Permission extends Model
    {
        protected $table = "permission";

        public function grouppermission(){
            return $this->hasMany('App\GroupPermission','group_permission_id','id');
        }
    }

?>
