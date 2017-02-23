<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use Auth;

class UserController extends Controller
{
    public function getList(){
    	$data = User::select('id','username','level')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.user.list',compact('data'));
    }

    public function getAdd(){
    	return view('admin.user.add');
    }

    public function postAdd(UserRequest $request){
    	$user = new User;
    	$user->username = $request->txtUser;
    	$user->password = Hash::make($request->txtPass);
    	$user->email = $request->txtEmail;
    	$user->level = $request->rdoLevel;
    	$user->remember_token = $request->_token;
    	$user->save();
    	return redirect()->route('admin.user.list')->with(['level'=>'success','flash_message' => 'Success! Complete Add User']);
    }

    public function getDelete($id){
    	$id_current_user = Auth::user()->id;
    	$user = User::find($id);
    	if(($id == 2) || ($id_current_user != 2 && $user->level == 1)){
    		return redirect()->route('admin.user.list')->with(['level'=>'danger','flash_message'=>'Sorry ! You don\'t permission to delete this user']);
    	}else{
    		$user->delete();
    		return redirect()->route('admin.user.list')->with(['level'=>'success','flash_message' => 'Success! Complete Delete User']);
    	}
    }

    public function getEdit($id){
    	$id_current = Auth::user()->id;
    	if($id_current == $id){
    		$user = User::find($id)->toArray();
    		return view('admin.user.edit',compact('user','id'));
    	}else{
    		return redirect()->route('admin.user.list')->with(['level'=>'danger','flash_message'=>'Sorry ! You don\'t permission edit this user']);
    	}
    	
    }

    public function postEdit(Request $request,$id){
        $user_current = User::find($id);
        $password = $request->txtOldPass;
        $newPass = $request->txtPass;

        $rules = [
            'txtOldPass' =>'required',
            'txtPass'    =>'required',
            'txtRePass'  => 'required|same:txtPass',
            'txtEmail'   => 'required'
        ];
        $messages = [
            'txtOldPass.required' => 'Please Enter Old Password',
            'txtPass.required'    => 'Please Enter New Password',
            'txtRePass.required'  => 'Please Enter Confirm Password',
            'txtRePass.same'      => 'Confirm Password is not match',
            'txtEmail'            => 'Please Enter Email'
        ];

        $this->validate($request,$rules,$messages);

        if(Hash::check($newPass,$user_current->password)){
            return redirect()->back()->with(['level'=>'danger','flash_message'=>'Sorry ! New Password must different Old Password']);
        }
        
        if(Hash::check($password,$user_current->password)){
            $user = new User;
            $user->username = $request->txtUser;
            $user->password = Hash::make($request->txtPass);
            $user->level = $request->rdoLevel;
            $user->email = $request->txtEmail;
            $user->remember_token = $request->_token;
            $user->save();
            return redirect()->route('admin.user.list')->with(['level'=>'success','flash_message'=>'Success ! Complete Edit User']);
        }else{
            return redirect()->back()->with(['level'=>'danger','flash_message'=>'Sorry ! Old Password is not correct']);
        }
    	
    }
}
