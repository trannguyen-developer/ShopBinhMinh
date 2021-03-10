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
            <li><a href="adminthongke.php">Thống kê</a></li>
        </ul>
      </div>

      <div id='nd'>
      <a id='them' href='themsp.php' type='button' class="btn btn-info">Thêm sản phẩm</a>

      <table border="1">
            <tr>
                <th>STT</th>
                <th>Mã sản phẩm</th>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá gốc</th>
                <th>Giá KM</th>
                <th>Kho</th>
                <th>Loại</th>
                <th>Chức năng</th>
            </tr>
            <?php
            $i=0;
            $query="SELECT * FROM sanpham";
            $result=mysqli_query($link,$query);
            while ($num=mysqli_fetch_array($result)) {
            $i=$i+1;
            echo "<tr>
                <td>".$i."</td>
                <td>".$num['MaSP']."</td>
                <td><img width='140px' src='../images2/Tong/".$num['Anh']."'</td>
                <td>".$num['TenSP']."</td>
                <td>".number_format($num['GiaGoc'])."</td>
                <td>".number_format($num['GiaKM'])."</td>
                <td>".$num['Kho']."</td>
                <td>".$num['Loai']."</td>
                <td width='120px'><a href='suasp.php?id=".$num['MaSP']."' type='button'  class='btn btn-success'>Sửa</a>
                <a href='deletesp.php?id=".$num['MaSP']."' type='button' class='btn btn-danger'>Xóa</a>

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