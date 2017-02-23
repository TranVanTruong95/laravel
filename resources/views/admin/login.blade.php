
<!DOCTYPE html>
<html dir="ltr" lang="vi">
<head>
<meta charset="UTF-8" />
<title>Quản lý đăng nhập</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script type="text/javascript" src="{!! url('public/admin/js/bootstrap.min.js') !!}"></script>
<link href="{!! url('public/admin/css/bootstrap.css') !!}" type="text/css" rel="stylesheet" />
<link href="{!! url('public/admin/css/stylesheet.css') !!}" type="text/css" rel="stylesheet" />
<link href="{!! url('public/admin/bower_components/font-awesome/css/font-awesome.min.css') !!}" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="container">
<header id="header" class="navbar navbar-static-top">
  <div class="navbar-header">
        <a href=""><img width="250px" src="{!! asset('resources/upload/logo.png') !!}" title="Quản trị cửa hàng" /></a></div>
  </header>
<div id="content">
  <div class="container-fluid">
    <br>
    <br>
    <div class="row">
      <div class="offset-sm-4 col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-lock"></i> Bạn hãy điền tên đăng nhập.</h4>
          </div>
          <br />
          @if(Session::has('flash_message'))
            <div class="alert alert-{!! Session::get('level') !!}">
                {!! Session::get('flash_message') !!}
            </div>
          @endif
          <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              <div class="form-group">
                <label for="input-username">Tên đăng nhập:</label>
                <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" name="username" value="" placeholder="Tên đăng nhập:" id="input-username" class="form-control" style="padding: 10px" />
                </div>
              </div>
              <div class="form-group">
                <label for="input-password">Mật khẩu:</label>
                <div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" name="password" value="" placeholder="Mật khẩu:" id="input-password" class="form-control" style="padding: 10px" />
                </div>
                                <span class="help-block"><a href="http://beta.banakeshop.com/admin/index.php?route=common/forgotten">Quên mật khẩu</a></span>
                              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i> Đăng nhập</button>
              </div>
                          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer id="footer" class="col-sm-4 offset-sm-4">Giant Shop. All Rights Reserved.<br />Phiên bản 3.3.3.3</footer></div>
<script type="text/javascript" src="{!! url('public/admin/js/myscript.js') !!}"></script>
</body></html>
