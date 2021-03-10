<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin quản lý</title>
    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="../link/Bootstrap/bootstrap.min.css" type="text/css">
    <link href="css/aduser.css" rel="stylesheet">

</head>

<body>
<?php
  include "../config.php";
  ?>
    <div id="header">
        <div id="login">
            <div id="left">
                <ul>
                    <li>
                        <div id="img1"><img src="../images/phone.png" width="25px" height="25px"></div>
                        <span>0981796642</span>
                    </li>
                    <li>
                        <div id="img2"><img src="../images/mail.png" width="60px" height="60px"></div>
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
  <div id="content">
      <div id='content1'>
      <div id="menu">
        <ul>
            <li id="tdmn">Admin Menu</li>
            <li><a href="adminuser.php">Tài khoản người dùng</a></li>
            <li><a href="adminsp.php">Sản phẩm</a></li>
            <li><a href="admindonhang.php">Đơn hàng</a></li>
            <li><a href="adminthongke.php">Thống kê</a></li>
        </ul>


        
      </div>

      <form action='' method='POST'>
<div id='themuser'>
    <h5>Thêm tài khoản người dùng:</h5>
    <label>Username:</label>
    <input type='text' name='user' placeholder="Nhập tài khoản">
    <br>
    <label>Password:</label>
    <input type='text' name='pass' id='mk'placeholder="Nhập mật khẩu">
    <br>
    <button name="them"   class='btn btn-success'>Thêm</button>

<div>


<?php
   
if(isset($_POST['them'])){
    if(empty($_POST['user']) or empty($_POST['pass'])){
    }
    else{
    $name=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="INSERT INTO  users(UserName,MatKhau) values('$name','$pass') ";
    mysqli_query($link,$sql);
    @header('location:adminuser.php');
    }
}

?>
        </form>
</div>

      <div id='nd'>
        <table border="1" width="600px">
            <tr>
                <th>STT</th>
                <th>User Name</th>
                <th>Password</th>
                <th >Chức năng</th>
            </tr>
            <?php
            $i=0;
            $query="SELECT * FROM users";
            $result=mysqli_query($link,$query);
            while ($num=mysqli_fetch_array($result)) {

            $i=$i+1;
            echo "<tr>
                <td>".$i."</td>
                <td >".$num['UserName']."</td>
                <td>".$num['MatKhau']."</td>
                <td width='120px'>
                <a href='suauser.php?id=".$num['UserName']."' type='button'  class='btn btn-success'>Sửa</a>
                <a href='deleteuser.php?ten=".$num['UserName']."' type='button' class='btn btn-danger'>Xóa</a>
                </td>
            </tr>";
            }
            ?>

        </table>
      </div>
</div>

    <script src="../link/Bootstrap/jquery-3.2.1.js"></script>
    <script src="../link/Bootstrap/popper.min.js"></script>
    <script src="../link/Bootstrap/bootstrap.min.js"></script>
</body>

</html>