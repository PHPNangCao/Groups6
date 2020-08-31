<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Permission extends Model
    {
        protected $table = "permission";

        protected $fillable = ['name', 'display_name'];

        public function roles(){
            return $this->hasMany(Role::class);
        }
    }

?>
