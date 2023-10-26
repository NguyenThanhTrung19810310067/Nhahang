<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng ký</title>
</head>
<body>
	<h3>Đăng Ký</h3>
	<form action="register_submit.php" method="POST">
		<table>
			<tr>
				<td>Tên đăng nhập</td>
				<td><input type="text" name="adminname"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Nhập lại mật khẩu</td>
				<td><input type="password" name="repassword"></td>
			</tr>
			<tr>
				<td colspan="2">
					<button><input type="submit" name="submit">Đăng ký</button>
					<button type="reset">Làm mới</button>
					<button type="submit"><a href="index.php">Đăng nhập</a></button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>