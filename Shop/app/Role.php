<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Role extends Model
    {
        protected $table = "role";

        protected $fillable = ['name', 'display_name'];

        public function permissions(){
            return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id');
        }

        public function users(){
            return $this->hasMany(User::class);
        }

    }
?>
