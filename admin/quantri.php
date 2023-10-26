<?php
	require_once 'config.php';
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
		if (isset($_GET['page_layout']) ) 
		{
			switch ($_GET['page_layout']) {
				case 'danhsach':
					require_once 'danhsach.php';
					break;
				case 'them':
					require_once 'them.php';
					break;
				case 'sua':
					require_once 'sua.php';
					break;
				case 'xoa':
					require_once 'xoa.php';
					break;
				//danh mục
				case 'danhmuc':
					require_once 'danhmuc.php';
					break;
				case 'themloaisp':
					require_once 'themloaisp.php';
					break;
				case 'sualoaisp':
					require_once 'sualoaisp.php';
					break;	
				case 'xoaloaisp':
					require_once 'xoaloaisp.php';
					break;
				//giỏ hàng
				case 'chitiet':
					require_once 'chitietdonhang.php';
					break;
				case 'xoadon':
					require_once 'xoadonhang.php';
					break;
				//..................
				default:
					require_once 'danhsach.php';
					break;
			}
		}else{
			require_once 'danhsach.php';
		}
	?>
</body>
</html>