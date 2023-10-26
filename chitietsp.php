<?php 
  ob_start();
  session_start();
  include("./admin/config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/chitietsp.css">
  <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
  <link href="css/button.css" rel="stylesheet" />
  <!--javascript--> 
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/num.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
    
    <title>Document</title>
</head>
<body>
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
                  <a class="nav-link" href="menu.html">Thực đơn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">Giới thiệu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="book.html">Đặt bàn</a>
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
<!--chi tiết sp-->
    <div class="container"> 
        <div class="card"> 
        <?php 
            if(isset($_GET['id'])){

              $id=$_GET['id'];
              $sql="SELECT *FROM products WHERE prd_id=$id";
              $query=mysqli_query($conn,$sql);
              $row=mysqli_fetch_assoc($query);
              $rowCart = mysqli_fetch_row($query);
        ?>
        <div class="container-fliud"> 
        <div class="wrapper row"> 
        <div class="preview col-md-6"> 
            <div class="preview-pic tab-content"> 
            <div class="tab-pane active" id="pic-1"><img id="a1" src="./images/<?php echo $row['image'];?>">
            </div> 
            
            </div> 
            <!--
            <ul class="preview-thumbnail nav nav-tabs">
            <li class="active">
              <a ddata-toggle="tab"><img src="https://haduxi.com/wp-content/uploads/2020/12/BO-2-TANG_resize_min-1-1.jpg" alt="Học thiết kế web bán hàng Online"></a>
            </li> 
            <li onclick="chuyenanh1()"><a data-toggle="tab"><img src="https://haduxi.com/wp-content/uploads/2020/12/meal-burger_b_ph_mai_2-1-1.jpg" alt="Học thiết kế web bán hàng Online"></a>
            </li> 
            <li><a data-toggle="tab"><img src="https://haduxi.com/wp-content/uploads/2020/12/meal-burger_b_ph_mai_2-1-1.jpg" alt="Học thiết kế web bán hàng Online"></a>
            </li> 
            <li><a data-toggle="tab"><img src="https://haduxi.com/wp-content/uploads/2020/12/BO-2-TANG_resize_min-1-1.jpg" alt="Học thiết kế web bán hàng Online"></a>
            </li> 
            <li><a data-toggle="tab"><img src="https://haduxi.com/wp-content/uploads/2020/12/BO-2-TANG_resize_min-1-1.jpg" alt="Học thiết kế web bán hàng Online"></a>
            </li> 
            </ul> 
          -->
        </div> 
        <script>
          function chuyenanh1(){
            document.getElementById('a1').src="https://haduxi.com/wp-content/uploads/2020/12/meal-burger_b_ph_mai_2-1-1.jpg";
          }
        </script>
        <div class="details col-md-6"> 
            <h3 class="product-title" id="namePro"><?php echo $row['prd_name'];?></h3> 
            <div class="rating"> 
            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> 
            </div> <span class="review-no">123 đánh giá</span> 
            </div> 
            <p class="product-description" ><?php echo $row['description'];?></p> 
            <h4 class="price" id="gia">Giá bán:<?php echo $row['price']; ?>đ</h4> 
            <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong>
            </p> 
            <h5 class="sizes">Kích cỡ: <span class="size" data-toggle="tooltip" title="small">s</span> <span class="size" data-toggle="tooltip" title="medium">m</span> <span class="size" data-toggle="tooltip" title="large">l</span> <span class="size" data-toggle="tooltip" title="xtra large">xl</span> 
            </h5>
            <div class="buttons_added">
              <input class="minus is-form" onclick="minus()" type="button" value="-">
              <input aria-label="quantity" id="quantity" class="input-qty" min="1" name="" type="number" value="1">
              <input class="plus is-form" onclick="plus()" type="button" value="+">
            </div>
            <!--<div class="input-group mb-4"> 
              <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field=""></button>
                  <i class="icon-minus2"></i>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value= "1" min ="1"> 
              <span class="input-group-btn ml-1" onclick="plus()">
                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                  <i class="icon-plus2"></i>
                </button>
              </span>-->
              
            <div class="action" style="margin-top: 5px;">
              <button class="add-to-cart btn btn-default" onclick="addCart(<?php echo $row['prd_id']; ?>)"  type="button">MUA NGAY</button>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> 
            </div> 
          </div> 
        </div> 
        </div> 
        <?php } ?>
        </div>
      </div>
      </div>
      
      <!--footer--> 
      <footer class="footer_section">
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
                  Phần này thêm mấy cái icon fb,insta,twitter,pinterest,...
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

    <script>
      function addCart(id){     //Gui du lieu gio hang
        num = $("#quantity").val();
        $.post('addcart.php',  {'id' : id, 'num':num}, function(data) {
          img = $("#a1").attr("src");
          $("#nameCart").text($("#namePro").text());
          $("#priceCart").text($("#gia").text());
          $("#numCart").text(num);
          $("#xxx").attr({
            'src': img,
          });
          $('#showCart').modal();
      });
  
  }
    </script>


<div class="modal fade" tabindex="-1" id="showCart"  role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="gridSystemModalLabel">Thông tin mua hàng</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <a href="#" class="thumbnail"> 
                <img | alt="" id="xxx" />
            </a>
        </div>
        <div class="col-md-6">
          <p>Name : <span id="nameCart"></span></p>
          <p>Price : <span id="priceCart"></span></p>
          <p>Num : <span id="numCart"></span></p>
        </div>
        </div>

      </div>
    
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div> /.modal -->

</body>
</html>
