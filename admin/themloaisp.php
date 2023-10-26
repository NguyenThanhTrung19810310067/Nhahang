<?php
	if(isset($_POST['submit']) ) {
		$brand_name = $_POST['brand_name'];
		$sql = "INSERT INTO brands (brand_name) VALUES ('$brand_name') ";
		$query = mysqli_query($conn,$sql);
		header("location: quantri.php?page_layout=danhmuc");
	}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm loại sản phẩm</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Tên loại sản phẩm</label>
					<input type="text" name="brand_name" class="form-control" required>
				</div>
				<button class="btn btn-success" type="submit" name="submit">Thêm</button>
			</form>
		</div>
	</div>
</div>