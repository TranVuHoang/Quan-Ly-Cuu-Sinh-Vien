<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<style type="text/css">
		body{
			background-image: url('img/banner3.jpg' );
		}
		.full-box{
			width: 430px;
			margin: 0 auto;
			background: gray;
			border-radius: 10px 10px;
			min-height: 28em;
			margin-top: 110px;
		}
		.full-box h1{
			font-style: 20pt;
			color: white;
			text-align: center;
			padding-top: 0.3em;
		}
		.box-user{
			background: white;
			border-radius: 10px;
			margin-top: 0.3em;
			margin-bottom: 5em;
			padding: 0.9em;
		}
		.box-user h2{
			font-style: 16pt;
			color: black;
			/*padding: 0.5em 0 0.5em 0;*/
			text-align: center;
		}
		.box-user img{
			width: 150px;
			display: block;
			margin:0 auto;
		}
		.box-user div{
			padding-top: 1em;
			text-align: center;
		}
		#login, #signup{
			width: 30%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			border: none;
			border-radius: 6px;
			cursor: pointer;
			margin-top: 10px;
			float:center;
			font-style: 12pt;
		}
	</style>
	
</head>
<body>
	<section class="full-box">
		<h1>Form User</h1>
		<article class="box-user">
			<h2>Quản Lý Cựu Sinh Viên</h2>
			<img src="img/icon_user.jpg"/>
			<div><button id="login" onclick="lFunction()">Đăng nhập</button> or <button id="signup" onclick="sFunction()">Đăng kí</button></div>
		</article>
	</section>
	<!--kết nối với login và signup-->
	<script>
	function lFunction() {
	    location.href = "login.php";
	}
	function sFunction() {
	    location.href = "signup.php";
	}
	</script>
</body>
</html>