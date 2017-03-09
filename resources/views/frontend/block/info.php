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