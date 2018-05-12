<?php require '../../../admin/user/login.php';?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Đăng nhập</title>
</head>
<body>

<!-- <form name="login" method="POST" action="../../models/insert_user.php"> -->
<form name="login" method="POST" action="<?php $_PHP_SELF ?>">

<?php if(isset($error) && $error == true): ?>
<p style="color:red;">Sai Tài khoản hoặc Mật khẩu!</p>
<?php endif; ?>

<p>
<label>Tài khoản:</label>
<input type="text" name="username" value="" />
</p>
<p>
<label>Mật khẩu:</label>
<input type="password" name="password" value="" />
</p>
<p>
<input type="submit" value="Đăng nhập" />
</p>
</form>
</body>
</html>

