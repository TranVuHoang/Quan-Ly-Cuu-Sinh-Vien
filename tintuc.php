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
</head>
<body>
	<div id = "container">
		<div id = "menu">
			<ul>
				<h3>
					<h5>Xin Chào</h5>
					<?php
						if(isset($_SESSION['name'])){
						echo $_SESSION['name'];
					}
					?>
				</h3>
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