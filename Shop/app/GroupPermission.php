<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;


    class GroupPermission extends Model
    {
        protected $table = "group_permission";

        public function permission(){
            return $this->belongsTo('App\Permission','group_permission_id','id');
        }
    }

?>
