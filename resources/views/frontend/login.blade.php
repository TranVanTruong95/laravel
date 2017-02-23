@extends('frontend.master')
@section('content')
<div class="container">
    @if(Session::has('flash_message'))
        <div class="alert alert-{!! Session::get('level') !!}">
            {!! Session::get('flash_message') !!}
        </div>
    @endif

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            <a class="circle facebook" href=" {{ url('login/facebook')}} ">
                               <i class="fa fa-facebook-square fa-2x"></i>
                            </a>
                            <a class="circle twitter" href=" {{ url('login/twitter')}}">
                               <i class="fa fa-twitter-square fa-2x"></i>
                            </a>
                            <a class="circle google" href=" {{ url('login/google') }} ">
                               <i class="fa fa-google-plus-official fa-2x"></i>
                            </a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
