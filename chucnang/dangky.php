<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
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
				<h2 class="text-center">Đăng ký tài khoản</h2>
				<?php
				if(isset($_POST['submit'])){
					if(empty($_POST['username']) or empty($_POST['password']) or empty($_POST['re_password']) ){
					echo "<p style='color:red'>Vui lòng nhập đầy đủ thông tin!</p>";
					} else{
						$username=$_POST['username'];
						$password=$_POST['password'];
						$re_password=$_POST['re_password'];
							if(strlen($username)<6 or strlen($password)<6){
							echo "<p style='color:red'>Username và Password phải trên 6 ký tự</p>";
							}else{
								if($re_password != $password){
									echo "<p style='color:red'>Password không trùng nhau!</p>";
								}else{
									$query="SELECT *from users where UserName='$username' ";
									$result=mysqli_query($link,$query);
									$num=mysqli_num_rows($result);
									if($num==0){
										$query2="INSERT INTO users( UserName, MatKhau) VALUES('$username', '$password')";
										$them=mysqli_query($link,$query2);
										if($them){
											echo "<p style='color:green'>Đăng ký thành công!</p>";

										}else{
											echo "<p style='color:red'>Đăng ký thất bại!</p>";


										}
									}else {
										echo "<p style='color:red'>Tên đăng nhập đã tồn tại!</p>";
									}
																		
									}
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
				<div class="form-group">
				  <label for="">Confirmation Password:</label>
				  <input  type="password" class="form-control" id="" name="re_password" placeholder="Nhập lại mật khẩu">
				</div>
				<button class="btn btn-success" name="submit" >Đăng ký</button>
			</div>
		</div>
	</div>
	</form>



    <script src="../link/Bootstrap/jquery-3.2.1.js"></script>
    <script src="../link/Bootstrap/popper.min.js"></script>
    <script src="../link/Bootstrap/bootstrap.min.js"></script>
</body>
</html>