<?php
	include 'config.php';
	if( isset($_POST['submit']) && $_POST["adminname"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' )
	{
		//thực hiện xử lý khi người dùng ấn submit và điền đầy đủ thông tin
		$adminname = $_POST["adminname"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		if ($password != $repassword)
		{
			header("location: register.php");
		}
		$sql = "SELECT * FROM admin WHERE adminname='$adminname' ";
		$old = mysqli_query($conn,$sql);
		$password = md5($password);
		if(mysqli_num_rows($old) > 0)
		{
			header("location: register.php");
		}
		$sql = "INSERT INTO admin (adminname,password) VALUES ('$adminname','$password') ";
		mysqli_query($conn,$sql);
		echo "Đã đăng ký thành công";
	}
	else{
		header("location: register.php");
	}
?>