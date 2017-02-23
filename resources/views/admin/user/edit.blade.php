@extends('admin.master')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">User
        <small>Edit</small>
    </h1>
</div>
@if(Session::has('flash_message'))
    <div class="col-lg-12 alert alert-{!! Session::get('level') !!}">
       {!! Session::get('flash_message') !!}
    </div>
@endif
@include('admin.block.error')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="{!! route('admin.user.postEdit',$user['id']) !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" value="{!! old('txtUser',isset($user)?$user['username']:'') !!}" readonly />
        </div>
        <div class="form-group">
            <label>Old Password</label>
            <input type="password" class="form-control" name="txtOldPass" placeholder="Please Enter Old Password">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password"/>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword"/>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email"  value="{!! old('txtEmail',isset($user)?$user['email']:'') !!}"/>
        </div>
        @if(Auth::user()->id != $id)
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" 
                @if($user['level'] == 1)
                checked="checked"
                @endif
                 type="radio">Admin
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="2"
                @if($user['level'] == 2)
                checked="checked"
                @endif
                 type="radio">Member
            </label>
        </div>
        @endif
        <button type="submit" class="btn btn-default">User Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@stop