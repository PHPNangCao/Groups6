<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Permission extends Model
    {
        protected $table = "permission";

        public function grouppermission(){
            return $this->belongsTo('App\GroupPermission','group_permission_id','id');
        }
    }

?>
