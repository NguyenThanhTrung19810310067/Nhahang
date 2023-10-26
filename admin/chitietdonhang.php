<?php
	$id= $_GET['id'];
	$sql_up= "SELECT * FROM donhang  WHERE donhang.donhang_id =$id ";
	$query_up= mysqli_query($conn,$sql_up);
	$row_up =mysqli_fetch_assoc($query_up);

    $query=mysqli_query($conn,"SELECT giohang.giohang_id, giohang.prd_price, 
    giohang.prd_num, products.image, products.prd_name FROM giohang JOIN products ON giohang.prd_id=products.prd_id WHERE giohang.donhang_id= $id")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <form method="POST">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Thông tin khách hàng</h3>
             </div>
             <div class="panel-body text-left">
                 <p>Tên khách hàng: <?php echo $row_up['tenkhach'] ?></p>
                 <p>Số điện thoại: <?php echo $row_up['sdt'] ?></p>
                 <p>Địa chỉ nhận hàng: <?php echo $row_up['diachi'] ?></p>
                 <p>Ghi chú: <?php echo $row_up['content'] ?></p>
                 <p>Ngày đặt hàng: <?php echo $row_up['ngaytao'] ?></p>
             </div>
             <button class="btn btn-success" type="submit" name="submit">Quay lại</button>
				<?php 
					if(isset($_POST["submit"])){
						header('location: giohang.php');
					}
				?>
        </div></form>
        <div class="panel panel-info" style="margin-left: auto;    text-align: center;">
             <div class="panel-heading">
                <h3 class="panel-title">Danh sách đơn hàng</h3>
             </div>
             <div class="panel-body">
                 <div class="table-responsive">
                      <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th>STT</th>
                                  <th>Tên sản phẩm</th>
                                  <th>Ảnh</th>
                                  <th>Số lượng</th>
                                  <th>Giá </th>
                                   <th>Thành tiền</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($query as $key => $value): ?>
                                <tr>
                                    <td><?php echo $key+1 ?></td>
                                    <td><?php echo $value['prd_name']?></td>
                                    <td><img src="../images/<?php echo $value['image'] ?>" alt="" style="with: 50px; height: 50px"></td>
                                    <td><?php echo $value['prd_num'] ?></td>
                                    <td><?php echo $value['prd_price'] ?></td>
                                    <td><?php echo $value['prd_num']*$value['prd_price']?></td>
                                </tr>

                            <?php endforeach ?>
                          </tbody>
                      </table>
                 </div>
             </div>
        </div>
    </div>
</div>
</body>
</html>