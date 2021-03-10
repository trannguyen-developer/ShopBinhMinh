<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css" type="text/css">

</head>

<body>
<form action="" method="POST">

<?php
   $link= new mysqli("localhost","root","","datn");
   ?>
    <div id="header">
        <div id="login">
            <div id="left">
                <ul>
                    <li>
                        <div id="img1"><img src="images/phone.PNG" width="25px" height="25px"></div>
                        <span>0981796642</span>
                    </li>
                    <li>
                        <div id="img2"><img src="images/mail.PNG" width="60px" height="60px"></div>
                        <span>trannguyenhn2000@gmail.com</span>
                    </li>
                </ul>
            </div>

            <div id="right">
            <ul>
                    
                    <li>
                        <div id="img2"><img src="images/login.PNG" width="40px" height="40px"></div>
                        <span><?php
                session_start();
                if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
                    echo $_SESSION['user'];
                }
                ?> </span>
                    </li>
                </ul>
            </div>

        </div>
        <div id="search">
            <div id="logo"><img src="images/logo.png" width="80px"></div>
            <div id="timkiem">
                <input type="search" placeholder="   Nhập từ khóa cần tìm">
                <button>Tìm kiếm</button>

            </div>
            <div id="cart"><a href="index.php"><img src="images/cart.png" width="60px"></a></div>

        </div>
    </div>
    <div id="menu">
        <ul>
            <li><a href="../../index.php">Trang chủ</a></li>
            <li><a href="#">Thương hiệu</a>
                <ul class="menucon">
                    <li><a href="../Rolex/index.php">Rolex</a></li>
                    <li><a href="../Hublot/index.php">Hublot</a></li>
                    <li><a href="../RichardMille/index.php">Richard Mille</a></li>
                </ul>
            </li>
            <li><a href="#">Sản phẩm</a>
                <ul class="menucon">
                    <li><a href="#">Đồng hồ nam</a>
                        <ul class="menuchau">
                            <li><a href="../ThachAnhNam/index.php">Đồng hồ thạch anh</a></li>
                            <li><a href="../CoNam/index.php">Đồng hồ cơ</a></li>
                            <li><a href="../ThongMinhNam/index.php">Đồng hồ thông minh</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Đồng hồ nữ</a>
                        <ul class="menuchau">
                            <li><a href="../ThachAnhNu/index.php">Đồng hồ thạch anh</a></li>
                            <li><a href="../CoNu/index.php">Đồng hồ cơ</a></li>
                            <li><a href="../ThongMinhNu/index.php">Đồng hồ thông minh</a></li>
                        </ul>
                    </li>
                    <li><a href="../PhuKien/index.php">Phụ kiện</a></li>
                </ul>
            </li>
            <li><a href="../baiviet.php">Bài viết</a></li>
            <li><a href="../lienhe.php">Liên hệ</a></li>
        </ul>

    </div>


    <div id="gh">
        <h1>Giỏ hàng</h1>
        <table  width="99%" id="sp">
            <tr>
                <th width="400px">Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>    
            <?php
            ob_start();
            $user=$_SESSION['user'];
    if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $query="SELECT * FROM giohang where UserName='$user'";
    $result=mysqli_query($link,$query);


 $i=0;
 $tt=1;
    while($row=mysqli_fetch_assoc($result)){
        $i=$i+1;
      $tt=$row['Gia']*$row['soLuong'];
      $masp=$row['MaSP'];
        echo "<tr>
                <td><center><b>".$row['TenSP']."</b></center></td>
                <td><center><img src=' ../../../../images2/Tong/".$row['MaSP'].".jpg' width='100px'>  </center> </td>
                <td><center>".number_format($row['Gia'])." </center></td>
                <td><center><input id='soluong' type='number' min='1' max='9' name='$i' value=".$row['soLuong']."  > </center> </td>
                <td><center>".number_format($tt)."</center></td>
                <td><center>  <a class='btn btn-outline-danger' href='xoa_gio_hang.php?id=".$row['MaSP']."'><font color='red'>Xóa</font></a><c/enter> </td>
             </tr>    ";
        if(isset($_POST['update'])){
            $query5="UPDATE giohang SET soLuong='$_POST[$i]' where MaSP='$masp' and  UserName='$user'";
            $result5=mysqli_query($link,$query5);
            @header('location:index.php');
        }
    }
}
ob_end_flush();
?>
            
        </table>
    </div>


<hr>
<button name="update" id="btn" class="btn btn-success">Update</button>
</form>

<?php

?>
        <form action='' method='POST'>

            <table id="formtt" width="30%" >
                <tr>
                    <td>Người nhận:</td>
                    <td><input type="text" name="namenhan">
                    </td>
                    <?php

  date_default_timezone_set("Asia/Ho_Chi_Minh");
  $date= date('d-m-Y H:i:s');          
$user=$_SESSION['user'];
$query="SELECT * from giohang where UserName='$user'";
$result=mysqli_query($link,$query);
if(isset($_POST['mua_hang'])){
if(empty($_POST['namenhan']) or empty($_POST['phone']) or empty($_POST['address'])){
    echo  " <font color='red'>Vui lòng nhập đầy đủ thông tin trước khi đặt hàng </font> ";

}
else{
while($row=mysqli_fetch_assoc($result)){
 $ten=$row['UserName'];
 $masp=$row['MaSP'];
 $tensp=$row['TenSP'];
 $gia=$row['Gia'];
 $sl=$row['soLuong'];
 $tenNN=$_POST['namenhan'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $ghichu=$_POST['ghi'];
    $query4="INSERT INTO muahang (UserName, TenNN, Phone, Adress, GhiChu, MaSP,TenSP, Gia, soLuong,Date_Time)
     VALUES ('$user','$tenNN','$phone','$address','$ghichu','$masp','$tensp','$gia','$sl','$date' )";
     mysqli_query($link,$query4);
     $query6="DELETE from giohang where UserName='$user'";
     mysqli_query($link,$query6);
     @header('location:index.php');
     
     }

}

 }
 
?>

       </tr>
                <tr>
                    <td>Điện thoại:</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Ghi chú</td>
                    <td><input type="text" name="ghi" id="ghichu"></td>
                </tr>                             
            </table>      
            <button name='mua_hang' id="btn" class="btn btn-success" data-toggle='modal' href='#www'>Mua hàng</button>
        </form>

    <div id="footer">
        <div id="f1">
            <h2>Giới thiệu</h2>
            <p>Đây là đồ án tốt nghiệp. là thành quả của quá trình nghiên cứu
                cửa tôi trong suốt thời gian qua. Và đồng thời được sự hướng dẫn
                tận tình của giáo viên hướng dẫn.
            </p>
        </div>

        <div id="f2">
            <h2>Danh mục nổi bật</h2>
            <ul>
                <li><a>Đồng hồ</a></li>
                <li><a>Đồng hồ</a></li>
                <li><a>Đồng hồ</a></li>
                <li><a>Đồng hồ</a></li>
                <li><a>Đồng hồ</a></li>
            </ul>
        </div>
        <div id="f3">
            <h2>Về chúng tôi</h2>
            <ul>
                <li><a>Thông tin giao hàng</a></li>
                <li><a>Bảo mật</a></li>
                <li><a>Điều khoản sử dụng</a></li>
            </ul>
        </div>

        <div id="f4">
            <h2>Tài khoản của bạn</h2>
            <ul>
                <li><a>Thông tin tài khoản</a></li>
                <li><a>Lịch sử giao dịch</a></li>
                <li><a>Sản phẩm yêu thích</a></li>
            </ul>
        </div>

    </div>
    <div id="copy">
        Copyright &copy; 2020 by trannguyen-developer
    </div>




  

      <script src="../Bootstrap/jquery-3.2.1.js"></script>
      <script src="../Bootstrap/popper.min.js"></script>
      <script src="../Bootstrap/bootstrap.min.js"></script>
    

</body>

</html>