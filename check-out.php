<?php
  $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>


<?php  include 'addcart.php';
        include './admin/config.php';
        
       
        if(isset($_POST['tenkhach'])){
          $user_id = $_SESSION['user'];
           $tenkhach = $_POST['tenkhach'];
           $diachi = $_POST['diachi'];
           $sdt = $_POST['sdt'];
           $content = $_POST['content'];
           $currentDate = date("Y-m-d H:i:s");
           $_POST["ngaytao"] = $currentDate ;
            
           
           $query = mysqli_query($conn,"INSERT INTO donhang(user_id,tenkhach,diachi,sdt,content,status,ngaytao) VALUES ('$user_id','$tenkhach','$diachi','$sdt','$content','1','$currentDate')");
          
          if($query){
            $donhang_id = mysqli_insert_id($conn);
            foreach ($_SESSION["cart"] as $key => $value){   
              $total = $value["price"]*$value["num"];
            
            
              mysqli_query($conn,"INSERT INTO giohang(donhang_id,prd_id,prd_price,prd_num,status,tongtien,ngaytao) VALUES ('$donhang_id','$key','$value[price]','$value[num]','1','$total','$currentDate')");
            }
            header('Location: check-out.php');

          }
          
        }
          

        

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">
	<title>Giỏ hàng </title>
	<link rel="stylesheet" type="text/css" href="css/Giohang.css">
	<!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!--jquery -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>

<body> 
     
    <!-- header section strats -->
    <header class="header_section" style="background-color: black;">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
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
                <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Thực đơn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.php">Đặt bàn</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="quantri2.php?page=Giohang">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    


                

    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <?php if(isset($_SESSION['cart']))    {?>
            <form class="needs-validation"  method="POST">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div> 
                <?php
                       
                                if(isset($_SESSION["cart"])){
                                    $total=0;
                                    foreach($_SESSION["cart"] as $key=>$value){
                                        $total += $value["price"]*$value["num"];
                                    }
                                }                          
                        ?>
                        
            
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill">2</span>
                        </h4>

                        <ul class="list-group mb-3">
                            

                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <?php 
                                    foreach($_SESSION["cart"] as $key=>$value){                             
                                ?>
                                <div>
                                    <h6 class="my-0"><?php echo $value["name"]?></h6>
                                   
                                    <small class="text-muted"><?php echo $value["price"]?> x <?php echo $value["num"]?></small>
                                </div>
                                
                                <span class="text-muted"><?php echo $value["price"]*$value["num"] ?></span>
                               
                            </li>
                            
                            <li class="list-group-item d-flex justify-content-between">
                            <?php }?>
                                <span>Tổng thành tiền</span> <span>$<?php echo $total;?></span>
                                
                            </li>
                        </ul>


                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary" style=" background-color: cornflowerblue; margin-left: auto; bottom: 34px;" >Xác nhận</button>
                            </div>
                        </div>

                    </div>
                   

                    <div class="col-md-8 order-md-1" id="bill">    
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <div class="row">   
                            <div class="col-md-12">
                                <label for="kh_name">Họ tên</label>
                                <input type="text" class="form-control"  id="tenkhach" name="tenkhach" placeholder="Họ tên đầy đủ">
                                    
                            </div>
                            <div class="col-md-12">
                                <label for="kh_mobile">Số điện thoại</label>
                                <input type="text" class="form-control"  id="sdt" name="sdt" placeholder="Số điện thoại">
                                    
                            </div>
                            <div class="col-md-12">
                                <label for="kh_address">Địa chỉ</label>
                                <input type="text" class="form-control"  id="diachi" name="diachi" placeholder="Địa chỉ">
                                    
                            </div>
                            <div class="col-md-12">
                                <label for="kh_content">Nội dung</label>
                                <input type="text" class="form-control"  id="content" name="content" placeholder="Nội dung">
                                     
                            </div>
                            
                            
                        </div>
                       
                        <h4 class="mb-3">Hình thức thanh toán</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="1">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="3">
                                <label class="custom-control-label" for="httt-3">Ship COD</label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" id="donhang_id"  name="donhang_id">Đặt
                            hàng</button>
                    </div>
                </div>
            
            </form>
               
                   

        </div>
        <!-- End block content -->
    </main>
    <?php } ?>
        
        
    
    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
        
            <p class="float-right">
                <a href="index.php">Về đầu trang</a>
            </p>
        </div>
    </footer>
    <!-- end footer -->
<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<!-- nice select  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
<!-- font awesome style -->
<link href="css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
<!--jquery -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>
