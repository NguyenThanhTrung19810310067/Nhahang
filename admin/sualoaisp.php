<?php
	$id= $_GET['id'];
    $sql_up= "SELECT * FROM brands WHERE brand_id = $id";
	$query_up= mysqli_query($conn,$sql_up);
	$row_up =mysqli_fetch_assoc($query_up);

	if(isset($_POST['submit']) ) {
		$brand_name = $_POST['brand_name'];
		$sql = "UPDATE brands SET brand_name = '$brand_name' WHERE brand_id = $id ";
		$query = mysqli_query($conn,$sql);
		header("location: quantri.php?page_layout=danhmuc");
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa sản phẩm</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Tên loại sản phẩm</label>
					<input type="text" name="brand_name" class="form-control" required value="<?php echo $row_up['brand_name']; ?>">
				</div>
				<button class="btn btn-success" type="submit" name="submit">Sửa</button>
			</form>
		</div>
	</div>
</div>