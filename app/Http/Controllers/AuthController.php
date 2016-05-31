<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller {

	public function getlogin(){
		return view('auth.login');
	}

	public function postlogin(Request $request){
		$this->validate($request,[
				'email'=>'required|email',
				'password'=>'required'
			]);
		if(!Auth::attempt($request->only(['email','password']), $request->has('remember')))
		{
			return redirect()->back()->with('info','Đăng nhập không thành công vui lòng kiểm tra lại!!');			
		}
		if(Auth::user()->role=='member'){
			return redirect()->route('home');
		}
		else{
			return redirect()->route('admin');
		}
	}
	public function getregister(){
		return view('auth.register');
	}

	public function postregister(Request $request){
		User::create([
				'username'=>$request->input('username'),
				'email'=>$request->input('email'),
				'password'=>bcrypt($request->input('password')),
				'address'=>$request->input('address'),
				'phone'=>$request->input('phone'),
			]);
		return redirect()->route('login')->with('info','Bạn đã tạo thành công tài khoản, mời bạn đăng nhập');
	}

	public function getlogout(){
		Auth::logout();
		return redirect()->route('login');
	}
}
