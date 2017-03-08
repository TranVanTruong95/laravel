@extends('frontend.master')
@section('content')

<section id="product">
  <div class="container">
   <!--  breadcrumb --> 
    <ul class="breadcrumb">
      <li>
        <a href="#">Home</a>
        <span class="divider">/</span>
      </li>
      <li class="active">Register Account</li>
    </ul>
    <div class="row">        
      <!-- Register Account-->
      <div class="col-sm-6 col-sm-offset-3">
        <h1 class="heading1"><span class="maintext">Register Account</span><span class="subtext">Register Your details with us</span></h1>
        @include('admin.block.error')
        <form action="{!! route('postRegister') !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <h3 class="heading3">Your Personal Details</h3>
          <div class="registerbox">
              <div class="form-group">
                <label class="control-label"><span class="red">*</span> Usename:</label>
                <div class="controls">
                  <input type="text"  class="form-control" name="username" id="username" value="{!! old('username') !!}" placeholder="Enter Username">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label"><span class="red">*</span> Email:</label>
                <div class="controls">
                  <input type="text" class="form-control" name="email" id="email" value="{!! old('email') !!}" placeholder="Enter Email">
                </div>
              </div>
              <div class="form-group">
                <label  class="control-label"><span class="red">*</span> Password:</label>
                <div class="controls">
                  <input type="password" class="form-control" name="password" id="password">
                </div>
              </div>
              <div class="form-group">
                <label  class="control-label"><span class="red">*</span> Confirm Password:</label>
                <div class="controls">
                  <input type="password" class="form-control" id="repassword" name="repassword">
                </div>
              </div>
              
              <h3 class="heading3">Shopping Information</h3>
              <div class="form-group">
                  <label class="control-label" style="float: left;">Sex</label>
                  <ul style="float: left;">
                      <li>
                          <label class="control-label">
                              <input type="radio" name="sex">Male
                          </label>
                      </li>
                      <li>
                      <label class="control-label">
                          <input type="radio" name="sex">Female
                      </label>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="form-group">
                  <label class="control-label">Phone</label>
                  <div class="controls">
                      <input type="text" name="phone" class="form-control" placeholder="Enter phone">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label">Address</label>
                  <div class="controls">
                      <input type="text" name="address" class="form-control" placeholder="Enter address">
                  </div>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-orange" value="Continue">
              </div>
          </div>
        </form>
        <div class="clearfix"></div>
        <br>
      </div>
    </div>
  </div>
</section>
@stop
