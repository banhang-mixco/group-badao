<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract {

	use Authenticatable;
	protected $table = 'users';
	protected $fillable = ['username', 'email', 'password','avatar','address','phone','role'];
	protected $hidden = ['password'];

	public function isAdmin(){
		if($this->role=='admin'){
			return true;
		}
		return false;
	}

}
