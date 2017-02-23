<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\User;
use Hash;

class RegisterController extends Controller
{
    public function getRegister(){
    	return view('frontend.page.register');
    }

    public function postRegister(RegisterRequest $request){
    	$user = new User;
    	$user->username = $request->username;
    	$user->email = $request->email;
    	$user->level = 2;
    	$user->password = Hash::make($request->password);
    	$user->save();
    	return redirect()->route('getLogin')->with(['level'=>'success','flash_message'=>'Success! Your account is register']);
    }
}
