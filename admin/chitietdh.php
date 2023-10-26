<?php
	$id= $_GET['id'];
	$sql_brand = "SELECT * FROM donhang";
	$query_brand = mysqli_query($conn,$sql_brand);

	$sql_up= "SELECT * FROM giohang inner join donhang, products WHERE donhang.donhang_id =$id AND giohang.prd_id=products.prd_id";
	$query_up= mysqli_query($conn,$sql_up);
	$row_up =mysqli_fetch_assoc($query_up);
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Chi tiết đơn hàng</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Tên khách hàng</label>
					<input type="text" name="prd_name" class="form-control" required value="<?php echo $row_up['tenkhach']; ?>">
				</div>

				<div class="form-group">
					<label>Ngày đặt</label>
					<input type="datetime" name="price" class="form-control" required value="<?php echo $row_up['ngaytao']; ?>">
				</div>

				<div class="form-group">
					<label>Số điện thoại</label>
					<input type="text" name="price" class="form-control" required value="<?php echo $row_up['sdt']; ?>">
				</div>

				<div class="form-group">
					<label>Địa chỉ</label>
					<input type="textarea" name="quantity" class="form-control" required value="<?php echo $row_up['diachi']; ?>">
				</div>

				<div class="form-group">
					<label>Trạng thái</label>
					<input type="text" name="description" class="form-control" required value="<?php if($row_up['status']=1){echo "Đã thanh toán";} ?>">
				</div>

				<div class="form-group">
					<label>Địa chỉ</label>
					<input type="textarea" name="quantity" class="form-control" required value="<?php echo $row_up['prd_name']; ?>">
				</div>

				<div class="form-group">
					<label>Tổng tiền</label>
					<input type="text" name="quantity" class="form-control" required value="<?php echo $row_up['tongtien']; ?>">
				</div>
				<button class="btn btn-success" type="submit" name="submit">Quay lại</button>
				<?php 
					if(isset($_POST["submit"])){
						header('location: giohang.php');
					}
				?>
			</form>
		</div>
	</div>
</div>