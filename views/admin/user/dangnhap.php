<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<style type="text/css">
		body {  
	padding-top: 0px;
	}
	.form-control { 
	margin-bottom: 10px;
	}
	.login-screen-bg {  
	background-color: #EFEFEF;
	}
	</style>
</head>
<body>
<div class="overlay" id="loginbox">
	<div class="box-popup no-padding">
		<h1 class="title-pop">Đăng nhập</h1>
		<div class="login-form fn-content">
			<iframe name="ifrlogin" id="ỉfrlogin" frameborder="0" height="0" width="0">
			#document
			</iframe>
			<form id="zid_login_form" name="zid_login_form" method="post" action="http://id.mp3-mtp.com.vn/login/index.38.html"" target="ifrlogin">
				<p class="alert alert-danger fn-msg none" id="_errmsg"></p>
				<p class="txt-input">
					<input type="text" name="u" id="_username" placeholder="Tên đăng nhập">
				</p>
				<p class="txt-input">
					<input type="password" name="p" placeholder="Mật khẩu">
				</p>
				<div class="radio-input">
					<div class="pull-left">
						<input type="checkbox" name="longtime" id="longtime" checked="checked">
						<label for="longtime">Nhớ mật khẩu</label>
						<p class="txt-link">
							<a href="http://id.mp3-mtp.com.vn/forgotinfo/index.38.html">Quên mật khẩu</a>
						</p>
					</div>
					<div class="pull-right">
						<button type="submit" class="button frm-button">Đăng nhập</button>
					</div>
				</div>
			</form>
			<span class="close fn-close" data-box="#loginbox"></span>
		</div>
		<span class="close fn-close" data-box="#loginbox"></span>
	</div>
</div>
</body>
</html>