<?php
	include 'config.php';
	$sql= "SELECT * FROM brands";
	$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!--owl slider stylesheet -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<!-- nice select  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
	<!-- font awesome style -->
	<link href="../css/font-awesome.min.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet" />
	<!-- responsive style -->
	<link href="../css/responsive.css" rel="stylesheet" />
	<!--thư viện cho date-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body style="background-color: darkslategray;">
<header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="danhsach.php">
          <span>
            Trung Công 
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="danhsach.php">Danh sách sản phẩm <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="giohang.php">Giỏ hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="danhmuc.php">Danh mục</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="" class="user_link">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
            <a href="logout.php" class="order_online">
              Đăng xuất
            </a>
          </div>
        </div>
      </nav>
	  <!--chữ chạy-->
  	<marquee style="color: white; font-weight: bold;">Xin chào admin! Vui lòng không cung cấp tài khoản mật khẩu đăng nhập.</marquee>
    </div>
  </header>
<!--kết thúc header-->

	<div class="container-fluid" style="margin-top: 25px;">
		<div class="card">
			<div class="card-header">
				<h2>Danh sách sản phẩm</h2>
			</div>
			<div class="card-body">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>#</th>
							<th>Tên loại sản phẩm</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$i = 1;
							while ($row = mysqli_fetch_assoc($query) ) { ?>
								<tr>
                                    <td><?php echo $i++; ?></td>
									<td><?php echo $row['brand_name']; ?></td>
									<td>
										<a href="quantri.php?page_layout=sualoaisp&id=<?php echo $row['brand_id']; ?>">Sửa</a>
									</td>
									<td>
										<a onclick="return Del('<?php echo $row['brand_name']; ?>')" href="quantri.php?page_layout=xoaloaisp&id=<?php echo $row['brand_id']; ?>">Xóa</a>
									</td>
								</tr>
							<?php } ?>
					</tbody>
				</table>
				<a class="btn btn-primary" href="quantri.php?page_layout=themloaisp">Thêm mới</a>
				<a class="btn btn-primary" href="">Tìm kiếm </a>
			</div>
		</div>
	</div>
	<script>
		function Del(name){
			return confirm("Bạn có chắc muốn xóa sản phẩm" +name+ " ?");
		}
	</script>
	  <!-- footer section -->
	<footer class="footer_section" style="margin-top: 50px; background-color: darkslategray;">
		<div class="container">
		<div class="row">
			<div class="col-md-4 footer-col">
			<div class="footer_contact">
				<h4>
				Liên hệ chúng tôi
				</h4>
				<div class="contact_link_box">
				<a href="">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span>
					Vị trí
					</span>
				</a>
				<a href="">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<span>
					Call +01 1234567890 (thêm sdt)
					</span>
				</a>
				<a href="">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<span>
					demo@gmail.com (email)
					</span>
				</a>
				</div>
			</div>
			</div>
			<div class="col-md-4 footer-col">
			<div class="footer_detail">
				<a href="" class="footer-logo">
				Trung Công
				</a>
				<p>
				Fanpage và mạng xã hội:
				</p>
				<div class="footer_social">
				<a href="">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="">
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<a href="">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="">
					<i class="fa fa-pinterest" aria-hidden="true"></i>
				</a>
				</div>
			</div>
			</div>
			<div class="col-md-4 footer-col">
			<h4>
				Giờ mở cửa
			</h4>
			<p>
				Hằng ngày
			</p>
			<p>
				10.00 Am -10.00 Pm
			</p>
			</div>
		</div>
		<div class="footer-info">
			<p>
			&copy; <span id="displayYear"></span> Quyền 
			<a href="https://html.design/">Free Html Templates</a><br><br>
			&copy; <span id="displayYear"></span> Phân phối bởi
			<a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
			</p>
		</div>
		</div>
  </footer>
</body>
</html>