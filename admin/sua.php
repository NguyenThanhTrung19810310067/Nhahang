<?php
	$id= $_GET['id'];
	$sql_brand = "SELECT * FROM brands";
	$query_brand = mysqli_query($conn,$sql_brand);

	$sql_up= "SELECT * FROM products WHERE prd_id = $id";
	$query_up= mysqli_query($conn,$sql_up);
	$row_up =mysqli_fetch_assoc($query_up);

	if(isset($_POST['submit']) ) {
		$prd_name = $_POST['prd_name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		if ($_FILES['image']['name']=='') {
			$image = $row_up['image'];
		}else{
			$image = $_FILES['image']['name'];
			$image_tmp = $_FILES['image']['tmp_name'];
			move_uploaded_file($image_tmp, 'img/'.$image);
		}
		

		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$description = $_POST['description'];
		$brand_id = $_POST['brand_id'];

		$sql = "UPDATE products SET prd_name = '$prd_name', image = '$image', price = $price, quantity = $quantity, description = '$description', brand_id = $brand_id WHERE prd_id = $id ";
		$query = mysqli_query($conn,$sql);
		header("location: quantri.php?page_layout=danhsach");
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
					<label>Tên sản phẩm</label>
					<input type="text" name="prd_name" class="form-control" required value="<?php echo $row_up['prd_name']; ?>">
				</div>

				<div class="form-group">
					<label>Ảnh sản phẩm</label> <br>
					<input type="file" name="image">
				</div>

				<div class="form-group">
					<label>Giá sản phẩm</label>
					<input type="number" name="price" class="form-control" required value="<?php echo $row_up['price']; ?>">
				</div>

				<div class="form-group">
					<label>Số lượng sản phẩm</label>
					<input type="number" name="quantity" class="form-control" required value="<?php echo $row_up['quantity']; ?>">
				</div>

				<div class="form-group">
					<label>Mô tả sản phẩm</label>
					<input type="text" name="description" class="form-control" required value="<?php echo $row_up['description']; ?>">
				</div>
				<div class="form-group">
					<label>Thương hiệu</label>
					<select class="form-control" name="brand_id">
						<?php
							while ($row_brand = mysqli_fetch_assoc($query_brand) ) { ?>
								<option value="<?php echo $row_brand['brand_id']; ?>"> <?php echo $row_brand['brand_name']; ?> </option>
						<?php	} ?>
					</select>
				</div>
				<button class="btn btn-success" type="submit" name="submit">Sửa</button>
			</form>
		</div>
	</div>
</div>