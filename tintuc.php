<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Quản lí Cựu Sinh Viên</title>
	<link rel="stylesheet" href="css\normalize.css"> <!--Reset CSS-->
	<link rel="stylesheet" href="css\style.css"> <!--CSS cho Website-->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style >
		#c{
			color: white;
			text-align: center;

		}
		.fas.fa-ad, .titleuser{
			color: white;
		}
		.iconuser{
			float: left;
		}
		h5 {
			margin: 10px;
		}
	</style>
</head>
<body>

	<div id = "container">
		<div id = "menu">
			<ul>
				<img src="img/iconuser3.png" class="iconuser" width='45' height="40">
				<h5 class='titleuser' style="text-align: center;">XIN CHÀO</h5>
				<h5 id="c">
				 	<?php
				    	if (isset($_SESSION['username'])){
				    		
				            echo $_SESSION['username'];
				         }
				 ?>
				</h5>
				<li><a href="#">Tin tức</a></li>
				<li>
					<a href="#">Cập nhật thông tin</a>
				</li>
				<li><a href="#">Danh sách sinh viên</a></li>
				<li><a href="#">Thống kê, biểu đồ</a></li>
				<li><a href="#">Cài đặt tài khoản</a></li>
			</ul>
		</div><!--#menu-->
		<div id="content">
			<div id="header">
				<div id = "slogan">
					<h1>QUẢN LÝ CỰU SINH VIÊN</h1>
				</div>
			</div><!--#header-->
			<div class="row">
				<div id="box1" class="col">
					<img src="img/css-icon.png" alt="CSS"/>
				</div>
				<div id="box2" class="col">
					<img src="img/url-icon.png" alt="URL"/>
				</div>
				<div id="box3" class="col">
					<img src="img/html-icon.png" alt="HTML" />
				</div>
			</div><!--.row-->
		</div><!--#content-->
		<div id ="footer">
			<p>Copyright &copy; Quản lý cựu sinh viên</p>
		</div><!--#footer-->
	</div> <!--#container-->
</body>
</html>