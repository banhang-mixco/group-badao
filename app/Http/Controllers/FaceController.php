<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;

/**
* 
*/
class FaceController extends Controller{
	
	public function __construct(){
		$this->middleware('guest');
	}

	public function getSocialAuth(){
		return Socialite::driver('facebook')->redirect();
	}

	public function getSocialAuthCallback(){

		try{
			$user= Socialite::driver('facebook')->user();
		}catch(Exception $e){

		}
		$authUser= $this->findOrCreateUser($user);
		Auth::login($authUser);
		return redirect()->route('home');
	}

	private function findOrCreateUser($facebookUser){
		$authUser= User::where('email','=',$facebookUser->user['email'])->first();
		if($authUser){
			return $authUser;
		}
		return $this->createUser($facebookUser);
	}

	private function createUser($user){
		$user=User::create([
				'username'=>$user->name,
				'email'=>$user->email,
				'avatar'=>$user->avatar,
			]);
		return $user;
	}
}