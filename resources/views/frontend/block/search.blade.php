<div id="search">
	<div class="container">
		<div class="row">
			<div class="col-sm-3" id="logo-header">
				<div id="logo_web">
					<a href="{!! route('home') !!}">
						<img src="{!! asset('resources/upload/logo.png') !!}">
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<div id="search-box">
					<form action="" method="POST">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Tìm kiếm" aria-describedby="basic-addon2">
						  <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-4 register-login">
				<div class="pull-right">
					<a href="">Register</a> | <a href="">Login</a>
					<br />
					<i class="glyphicon glyphicon-envelope"></i>
						<a href="">quangtruongvttb@gmail.com</a>
					<br />

					<div class="dropdown">
					 	<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <i class="fa fa-shopping-cart" style="color: #FF3300;"></i> {!! $count !!} sản phẩm - ${!! $total !!} <i class="fa fa-caret-down"></i>
						    <span class="caret"></span>
					 	</button>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
					    	<li>1</li>
					    	<li>2</li>
					    	<li>3</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>