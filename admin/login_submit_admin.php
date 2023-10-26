<?php
	session_start();
	include 'config.php';
	if (isset($_POST["submit"]) && $_POST["adminname"] !='' && $_POST["password"] !='') 
	{
		$adminname = $_POST["adminname"];
		$password = $_POST["password"];
		$password = md5($password);
		$sql = "SELECT * FROM admin WHERE adminname='$adminname' AND password='$password' ";
		$admin = mysqli_query($conn,$sql);
		if (mysqli_num_rows($admin)>0) {
			$_SESSION["admin"] = $adminname;
			header("location: danhsach.php");
		}else{
			echo "Bạn đã nhập sai username hoặc password";
		}
	}
	else{
		header("location: index.php");
	}
?>