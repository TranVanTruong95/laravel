<div class="headerstrip">
    <div class="container">
      <div class="row">
        <div class="span12">
          <a href="index-2.html" class="logo pull-left"><img src="{!! url('public/frontend/img/logo.png') !!}" alt="SimpleOne" title="SimpleOne"></a>
          <!-- Top Nav Start -->
          <div class="pull-left">
            <div class="navbar" id="topnav">
              <div class="navbar-inner">
                <ul class="nav" >
                  <li><a class="home active" href="{!! url('/') !!}">Home</a>
                  </li>
                  <li><a class="myaccount" href="#">My Account</a>
                  </li>
                  <li><a class="shoppingcart" href="{!! url('gio-hang') !!}">Shopping Cart</a>
                  </li>
                  <li><a class="checkout" href="{!! url('thanh-toan') !!}">CheckOut</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="pull-right">
            @if(!Auth::check())
            <a href="{!! url('register') !!}" class="btn btn-primary" style="margin: 20px 0 0 0"><i class="fa fa-pencil-square-o"></i>  Sign Up</a>
            <a href="{!! url('login') !!}" class="btn btn-primary" style="margin: 20px 0 0 0"><i class="fa fa-sign-in"></i>  Sign In</a>
            @else
                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw" style="color: #000;"></i>{!! Auth::user()->username !!}</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{!! route('getLogout') !!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            @endif
          </div>
          <!-- Top Nav End -->
        </div>
      </div>
    </div>
  </div>