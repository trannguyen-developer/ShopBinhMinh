<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin quản lý</title>
    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="../link/Bootstrap/bootstrap.min.css" type="text/css">

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
      <div id="menu">
        <ul>
            <li id="tdmn">Admin Menu</li>
            <li><a href="adminuser.php">Tài khoản người dùng</a></li>
            <li><a href="adminsp.php">Sản phẩm</a></li>
            <li><a href="admindonhang.php">Đơn hàng</a></li>
            <li><a href="#">Thống kê</a></li>
        </ul>
      </div>
      <div id='nd'>
      <h2>Danh sách tài khoản mua nhiều sản phẩm nhất cho shop</h2>
      <table border="1">
            <tr>
                <th>STT</th>
                <th>Tài khoản</th>
                
                <th>Tổng tiền</th>
            </tr>
            <?php
            $i=0;
            $link= new mysqli("localhost","root","","datn");

            $query="SELECT * FROM users  ";
            $result=mysqli_query($link,$query);
            while ($num=mysqli_fetch_array($result)) {
            $ten=$num['UserName'];
            $i=$i+1;
            echo "<tr>";
            echo   "<td>".$i."</td>";

            echo    "<td>".$num['UserName']."</td>";
              
             echo   "<td>";

                $tt=0;
                $tong=0;
                $query3="SELECT * FROM muahang where UserName='$ten'  ";
                $result3=mysqli_query($link,$query3);
            while ($num3=mysqli_fetch_array($result3)) {
                 $tt=$num3['Gia']*$num3['soLuong'];
                 $tong=$tt+$tong;
                

            }
            echo number_format($tong);
            echo "</td>";
               
            echo "</tr>";
        
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