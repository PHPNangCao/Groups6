<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Role extends Model
    {
        protected $table = "role";

        protected $fillable = ['name', 'display_name'];

        public function permissions(){
            return $this->belongsToMany('APP\Permission');
        }

        public function users(){
            return $this->hasMany('APP\User');
        }

    }
?>
