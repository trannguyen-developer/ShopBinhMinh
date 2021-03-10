<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tài khoản user</title>
    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="../link/Bootstrap/bootstrap.min.css" type="text/css">

</head>

<body>
    <div id="header">
        <div id="login">
            <div id="left">
                <ul>
                    <li>
                        <div id="img1"><img src="../images/phone.PNG" width="25px" height="25px"></div>
                        <span>0981796642</span>
                    </li>
                    <li>
                        <div id="img2"><img src="../images/mail.PNG" width="60px" height="60px"></div>
                        <span>trannguyenhn2000@gmail.com</span>
                    </li>
                </ul>
            </div>

            <div id="right">
                <ul>
                    <li>
                        <span><a href="chucnang/dangnhap.php " style='color:white' target="_blank">Xin chào admin</a></span>
                    </li>
                </ul>
            </div>

        </div>
        <div id="search">
            <div id="logo"><img src="../images/logo.png" width="80px"></div>
            <div id="timkiem">
            </div>
            <div id="cart"><img src="../images/cart.png" width="60px"></div>
        </div>
    </div>


<form method="POST">
<?php
  include "../config.php";
$id=$_GET['id'];
$query="SELECT * FROM users where UserName='$id'";
$result=mysqli_query($link,$query);
$num=mysqli_fetch_array($result);
    $user=$num['UserName'];
    $pass=$num['MatKhau'];



?>
<center>
    <div id='themuser'>
        <h5>Sửa tài khoản người dùng:</h5>
        <label>Username:</label>
        <input type='text' name='user' value="<?php echo $user ; ?>" placeholder="Nhập tài khoản">
        <br>
        <label>Password:</label>&nbsp;
        <input type='text' name='pass' value="<?php echo $pass ; ?>" id='mk'placeholder="Nhập mật khẩu">
        <br>
        <button name="sua"   class='btn btn-success'>Sửa</button>

    <div>
</center>
    <?php
$id=$_GET['id'];
if(isset($_POST['sua'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
$query="UPDATE users set UserName='$u', MatKhau='$p' where UserName='$id'";
mysqli_query($link,$query);
header('location:adminuser.php');
}  


?>

</form>

    <script src="../link/Bootstrap/jquery-3.2.1.js"></script>
    <script src="../link/Bootstrap/popper.min.js"></script>
    <script src="../link/Bootstrap/bootstrap.min.js"></script>
</body>

</html>