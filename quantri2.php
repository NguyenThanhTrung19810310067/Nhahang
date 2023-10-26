<?php
	require_once './admin/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title>Quản lý sản phẩm</title>
</head>
<body>
	<?php
		if (isset($_GET['page']) ) 
		{
			switch ($_GET['page']) {
				case 'chitietsp':
					require_once 'chitietsp.php';
					break;
				case 'Giohang':
					require_once 'Giohang.php';
					break;
				
				
				default:
					require_once 'index.php';
					break;
				
			}
		}else{
			require_once 'index.php';
		}
	?>
	<script>  
	       function updateCart(id){
                num = $("#quantity_"+id).val();
                  $.post('updateCart.php', {'id' : id,'num':num}, function(data) {
					  //after update cart reload GUI
                  $("#listCart").load("http://localhost/nhahang_klq/quantri2.php?page=Giohang #cartx"); 
                });
           }
           function deleteCart(id){
			UpdateCart(id,0);
		   }

		   function UpdateCart(id,num){
			$.post('updateCart.php', {'id' : id,'num':num}, function(data, status) {
					location.reload();
		   });
		 }





	</script>
     





</body>
</html>