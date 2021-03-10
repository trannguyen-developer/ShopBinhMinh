<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình Minh Watch</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css" type="text/css">

</head>

<body>
<?php
  include "../../config.php";
  ?>
    <div id="header">
        <div id="login">
            <div id="left">
                <ul>
                    <li>
                        <div id="img1"><img src="images/phone.png" width="25px" height="25px"></div>
                        <span>0981796642</span>
                    </li>
                    <li>
                        <div id="img2"><img src="images/mail.png" width="60px" height="60px"></div>
                        <span>trannguyenhn2000@gmail.com</span>
                    </li>
                </ul>
            </div>

            <div id="right">
                <ul>
                    <li>
                        <div id="img1"><img src="images/dangky.png" width="45px" height="45px"></div>
                        <span><a href="../../chucnang/dangky.php " style='color:white' target="_blank">Đăng ký</a></span>
                    </li>
                    <li>
                        <div id="img2"><img src="images/login.png" width="40px" height="40px"></div>
                        <span><a href="../../chucnang/dangnhap.php " style='color:white' target="_blank">Đăng nhập</a></span>
                    </li>
                </ul>
            </div>

        </div>
        <div id="search">
            <div id="logo"><img src="images/logo.png" width="80px"></div>
            <div id="timkiem">
            <form method="POST">
                <select name='sele'>
                    <option>Rolex</option>
                    <option>Hublot</option>
                    <option>Richard Mille</option>
                    <option>Đồng hồ cơ</option>
                    <option>Đồng hồ thông minh</option>

                </select>
                <input type="search" placeholder="   Nhập từ khóa cần tìm">
                <button name='sub'>Tìm kiếm</button>
                <?php
                if (!isset($_POST["sele"]))
                {
                //If not isset -> set with dumy value
                    $_POST["sele"] = "undefine";
                }
if(isset($_POST['sub']) and $_POST['sele']=='Rolex'){
            header('location:../Rolex/index.php');
       
}
else if(isset($_POST['sub']) and $_POST['sele']=='Hublot'){
    header('location:../Hublot/index.php');

}
else if(isset($_POST['sub']) and $_POST['sele']=='Richard Mille'){
    header('location:../RichardMille/index.php');

}
else if(isset($_POST['sub']) and $_POST['sele']=='Đồng hồ cơ'){
    header('location:../CoNam/index.php');

}
else if(isset($_POST['sub']) and $_POST['sele']=='Đồng hồ thông minh'){
    header('location:../ThongMinhNu/index.php');

}
?>
            </form>

            </div>
            <div id="cart"><img src="images/cart.png" width="60px"></div>

        </div>
    </div>
     <div id="menu">
        <ul>
            <li><a href="../../index.php">Trang chủ</a></li>
            <li><a href="#">Thương hiệu</a>
                <ul class="menucon">
                    <li><a href="index.php">Rolex</a></li>
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
            <li><a href="../../baiviet.php">Bài viết</a></li>
            <li><a href="../../lienhe.php">Liên hệ</a></li>
        </ul>

    </div>
    
    <div id="demo">
        <img src="images/banner.jpg"  >

    </div>
    
    <div id="content">
        <div id="rolex">
            <div id="td">
                <p>Thương hiệu Rolex</p>
            </div>

            <div id="nd">

             
                <?php
      $query=" SELECT * FROM sanpham where Loai='rolex' ";
      $result=mysqli_query($link,$query);
      foreach($result as $row){  
                echo   "<div class='sp'> ";
                echo    "<div id='anh'><img src='../../images2/Tong/".$row['Anh']."'></div>";
                echo    "<p id='p1'>".$row['TenSP']."</p>";
                echo    "<p id='p2'>";
                echo    "<span id='s1'>".number_format($row['GiaGoc'])."</span>";
                echo     "<span id='s2'>".number_format($row['GiaKM'])."</span>";
                echo    " </p>";
                echo    "<a href='#".$row['MaSP']."' class='btn btn-outline-secondary'  data-toggle='modal' >Chi Tiết</a>";
                echo    " </div>";
            }
      
            ?>
               
            </div>
        </div>
    



    </div>
    
    <div id="footer">
        <div id="f1">
            <h3>Giới thiệu</h3>
            <p>Đây là đồ án tốt nghiệp. là thành quả của quá trình nghiên cứu
                cửa tôi trong suốt thời gian qua. Và đồng thời được sự hướng dẫn
                tận tình của giáo viên hướng dẫn.
            </p>
        </div>

        <div id="f2">
            <h3>Danh mục nổi bật</h3>
            <ul>
                <li><a>Đồng hồ</a></li>
                <li><a>Đồng hồ</a></li>
                <li><a>Đồng hồ</a></li>
                <li><a>Đồng hồ</a></li>
                <li><a>Đồng hồ</a></li>
            </ul>
        </div>
        <div id="f3">
            <h3>Về chúng tôi</h3>
            <ul>
                <li><a>Thông tin giao hàng</a></li>
                <li><a>Bảo mật</a></li>
                <li><a>Điều khoản sử dụng</a></li>
            </ul>
        </div>

        <div id="f4">
            <h3>Tài khoản của bạn</h3>
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


<form method='POST'>
<?php
    $query=" SELECT * FROM sanpham where Loai='rolex'  ";
      $result=mysqli_query($link,$query);
      foreach($result as $row){  
   echo" <div class='modal' tabindex='-1' id='".$row['MaSP']."' >
        <div class='modal-dialog modal-lg' style='width:1200px'>
            <div class='modal-content' >
                <div class='modal-header'>
                    THÔNG TIN SẢN PHẨM
                </div>
                <div class='modal-body' >
                    <div class='row'>
                        <div class='col-sm-6'>
                            <img src='../../images2/Tong/".$row['Anh']."' width='380' >
                        </div>
                        <div class='col-sm-6'>
                            <div id='td'>Tên sản phẩm: ".$row['TenSP']."</div>
                            <hr >
                            <p id='p1'>Thương hiệu: Rolex</p>
                            <p id='p2'>Tình trạng: Còn hàng</p>
                            <p id='p3'><span id='s1'>Giá cũ: ".number_format($row['GiaGoc']). "</span>|  
                            <span id='s2'> Giá mới: ".number_format($row['GiaKM']). "</span>
                            </p>
                            <p id='p4'>Độ chống nước: Đi bơi (10 ATM)</p>
                            <p id='p5'>BẢO HÀNH 5 NĂM và hoàn tiền GẤP 20
                                 LẦN (nếu phát hiện hàng giả). Cam kết chính
                                  hãng bởi Công ty Cổ Phần Bình Minh Việt Nam - MST: 0981796642
                            </p>
                            <br>
                            <a id='btncart' name='add_cart' class='btn btn-danger' data-toggle='modal' href='#'>Thêm vào giỏ hàng</a>
                            
                        </div>
                        
                       
                       
                    </div>
               
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                </div>
            </div>
        </div>
    </div>";
}
?>
</form>
    <script src="../Bootstrap/jquery-3.2.1.js"></script>
      <script src="../Bootstrap/popper.min.js"></script>
      <script src="../Bootstrap/bootstrap.min.js"></script>
</body>

</html>