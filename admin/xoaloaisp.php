<?php
	$id= $_GET['id'];
	$sql = "DELETE FROM brands where brand_id = '$id'";
	$query = mysqli_query($conn,$sql);
	header("location: quantri.php?page_layout=danhmuc");
?>