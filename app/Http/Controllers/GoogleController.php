<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Illuminate\Http\Request;
use App\User;

class GoogleController extends Controller {

	public function __construct(){
		$this->middleware('guest');
	}

	public function getSocial(){
		return Socialite::driver('google')->redirect();
	}

	public function getSocialCallback(){

		try {
			$user=Socialite::driver('google')->user();
		} catch (Exception $e) {
			
		}
		$authUser= $this->findOrCreateUser($user);
		Auth::login($authUser);
		return redirect()->route('home');
	}

	private function findOrCreateUser($googleUser){
		$authUser= User::where('email','=',$googleUser->email)->first();

		if($authUser){
			return $authUser;
		}
		return $this->createUser($googleUser);
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
