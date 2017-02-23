<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginAdminController extends Controller
{
    public function getAdminLogin(){
    	return view('admin.login');
    }

    public function postAdminLogin(Request $request){
    	$login = [
    	'username' => $request->username,
    	'password' => $request->password,
    	'level'	   => 1
    	];

    	if(Auth::attempt($login)){
    		return redirect()->route('admin.cate.list');
    	}else{
    		return redirect()->back()->with(['level'=>'danger','flash_message'=>'Sorry! Your account is not direct, please try again']);
    	}
    }

    public function getAdminLogout(){
    	Auth::logout();
    	return redirect()->route('getAdminLogin');
    }
}
