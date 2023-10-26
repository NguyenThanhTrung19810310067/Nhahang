<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="../css/login_admin.css">
</head>
<body>
	
	<form action="login_submit_admin.php" method="POST">
	<div class="login">
		<h2>Đăng nhập</h2>
		<br>
		<p>Tài khoản</p>
		<input class="user" type="text" placeholder="Enter email or member phone" name="adminname">
		<br>
		<p>Password</p>
		<input class="pass" type="password" placeholder="Enter password" name="password">
		<br>
		<div class="check">
			<input class="checkbox" type="checkbox" placeholder="Enter password"> Nhớ đăng nhập
		</div>
		<br>
		<button type="submit" name="submit">Đăng nhập</button>
		<br>
		<a href="#">Quên mật khẩu?</a>

	</div>
	</form>
</body>
</html>