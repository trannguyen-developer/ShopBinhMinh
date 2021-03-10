<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
    <link rel="stylesheet" href="../link/Bootstrap/bootstrap.min.css" type="text/css">

</head>
<?php
  include "../config.php";
  ?>
<body>
	<form action="" method="POST" role="form">
<div class="container">
		<div class="">
			<div class="">
				<h2 class="text-center">Đăng nhập tài khoản</h2>
				<?php
				session_start();
				if(isset($_POST['submit'])){
					if(empty($_POST['username']) or empty($_POST['password'])  ){
					echo "<p style='color:red'>Vui lòng nhập đầy đủ thông tin!</p>";
					} else{
						$username=$_POST['username'];
						$password=$_POST['password'];
                        $query="SELECT * FROM users where UserName='$username' and MatKhau='$password'";
                        $result=mysqli_query($link,$query);
                        $num=mysqli_num_rows($result);
                        if($num>0){
							$_SESSION['user']=$username;
							$_SESSION['pass']=$password;

                            header("location:webss/index.php");
                        }
                        else{
							echo "<p style='color:red'>Bạn đã nhập sai tên tài khoản hoặc mật khẩu!</p>";
                        }
                        
							
					}
				}
						
			?>
			</div>
			
			<div class="">
				<div class="form-group">
				  <label for="">Username:</label>
				  <input  type="text" class="form-control" id="" name="username" placeholder="Nhập tên tài khoản">
				</div>
				<div class="form-group">
				  <label for="">Password:</label>
				  <input  type="password" class="form-control" id="" name="password" placeholder="Nhập mật khẩu">
				</div>
				
				<button class="btn btn-success" name="submit">Đăng nhập</button>
			</div>
		</div>
	</div>
	</form>
    <script src="../link/Bootstrap/jquery-3.2.1.js"></script>
    <script src="../link/Bootstrap/popper.min.js"></script>
    <script src="../link/Bootstrap/bootstrap.min.js"></script>
</body>
</html>