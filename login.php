
<?php
session_start();
if (isset($_POST['submit']))
{
    $_SESSION['username'] = $_POST['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style type="text/css">
    #content{
      width: 450px;
      height: 300px;
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
      margin-top: 15px;
    }
    input[type=submit]:hover{
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
    <h2>Login form</h2>
    <form class="dropdown-menu p-4" action="" method="POST">
      <div class="form-group">
        <label for="exampleDropdownFormEmail2">Username</label>
        <input type="text" name = 'username'class="form-control" id="text1" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exampleDropdownFormPassword2">Password</label>
        <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
     
      <button type="submit" name = "submit" class="btn btn-primary" hef="#">Đăng nhập</button>
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
      if($username == '' || $password==''){
        echo '<p style="text-align: center;">Hãy điền đầy đủ thông tin!!!<p/>';
      }else{
        $password = md5($password);
        $sql = "SELECT * FROM `signup` WHERE name='$username' and password='$password'";
        $query = mysqli_query($connect,$sql);
        $_SESSION["name"] = 'username';
        $num_rows = mysqli_num_rows($query);
        if($num_rows !=0){
          header('Location: tintuc.php');
        }else{
          echo '<p style="text-align: center;">Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng kiểm tra lại!!!<p/>';
        }
      }
    }
  ?>
</body>
</html>