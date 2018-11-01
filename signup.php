<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style type="text/css">
    #content{
      width: 450px;
      height: 380px;
      border-radius: 50px;
      background-color: #f2f2f2;
      padding: 20px;
      margin: auto;
      margin-top: 120px;
    }
    input[type=text], input[type=password]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 20px;
        box-sizing: border-box;
    }
    button[type=submit] {
      width: 25%;
      float: right;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    #quaylai{
       margin-top: 15px;
       float: left;
       border: none;
       cursor: pointer;
    }
    #quaylai:hover{
      background-color: #BDBDBD;
    }
  </style>
</head>
<body>
  <div id="content">
    <h2>Sign Up</h2>
    <form class="dropdown-menu p-4" action="" method="POST">
      <div class="form-group">
        <label for="exampleDropdownFormEmail2">Username</label>
        <input type="text" name = 'username'class="form-control" id="text1" placeholder="Username">
      </div>

      <div class="form-group">
        <label for="exampleDropdownFormEmail2">Password</label>
        <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
      </div>

      <div class="form-group">
        <label for="exampleDropdownFormPassword2">Confirm Password</label>
        <input type="password" name="c_password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Confirm Password">
      </div>
      <button type="submit" name="submit" class="btn btn-primary" onclick="dang_ki()"/>Đăng kí</button>
      <img id= 'quaylai' src="img/back.ico" width='45' height="40" onclick="back()"/>
    </form>
  </div>
  <script>
    function back() {
        location.href = "index.php";
    }
  </script>
  <?php
      include 'connect.php';
      if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        if($username==""|| $password==""||$c_password==""){
          echo '<p style="text-align: center;">Xin vui lòng nhập đầy đủ thông tin!!!<p/>';
        } else{
          $password = md5($password);
          $c_password = md5($c_password);
          if($password==$c_password){
            $sql = "INSERT INTO `signup`(`name`, `password`, `c_password`) VALUES ('$username','$password','$c_password')";
            $query = mysqli_query($connect,$sql);
            if($query!=0){
                echo '<p style="text-align: center;">Đăng kí thành công!!!<p/>';
            } else {
              echo '<p style="text-align: center;">Mật khẩu không trùng khớp. Yêu cầu nhập lại!!<p/>';
            }
        }
      }
    }
  ?>
  
</body>
</html>