@extends('frontend.master')
@section('content')
<section id="product">
  <div class="container">
   <!--  breadcrumb --> 
    <ul class="breadcrumb">
      <li>
        <a href="#">Home</a>
        <span class="divider"></span>
      </li>
      <li class="active"><a href="{!! route('getLienHe') !!}">Contact</a></li>
    </ul>  
    <!-- Contact Us-->
    <h1 class="heading1"><span class="maintext">Contact</span><span class="subtext"> Contact Us for more</span></h1>
    <div class="row">
      <div class="col-sm-5 col-sm-offset-1">
            <form class="{!! url('lien-he') !!}"  method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                  <label class="control-label">Name <span class="required">*</span></label>
                  <div class="controls">
                    <input type="text"  class="required form-control" id="name" value="" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Message</label>
                  <div class="controls">
                    <textarea  class="required form-control" rows="6" cols="40" id="message" name="message"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <input class="btn btn-orange" type="submit" value="Submit" id="submit_id">
                  <input class="btn" type="reset" value="Reset">
                </div>
            </form>
      </div>
      
      <!-- Sidebar Start-->
      <div class="col-sm-4 col-sm-offset-2">
        <aside>
          <div class="sidewidt">
            <h2 class="heading2"><span>Contact Info</span></h2>
            <p> Every idea, question for website, customer could send into helpful system of our. Or customers could contact to information belows :
              <br>
              <br />
              Phone: (012) 333-7890<br>
              Fax: (123) 444-7890<br>
              Email: test@contactus.com<br>
              Web: yourcompanyname.com<br>
            </p>
          </div>
        </aside>
      </div>
      <!-- Sidebar End-->
      
    </div>
  </div>
</section>
@stop