<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable= ['name'];
    public $timestamps = false; 


    public function users(){
    	return $this->hasMany('App\User','role_id','user_id');
    }
}
