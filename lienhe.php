<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình Minh Watch</title>
    <link href="css/lienhe.css" rel="stylesheet">
    <link rel="stylesheet" href="link/Bootstrap/bootstrap.min.css" type="text/css">

</head>

<body>
<?php
  include "config.php";
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
                        <span><a href="chucnang/dangky.php " style='color:white' target="_blank">Đăng ký</a></span>
                    </li>
                    <li>
                        <div id="img2"><img src="images/login.png" width="40px" height="40px"></div>
                        <span><a href="chucnang/dangnhap.php " style='color:white' target="_blank">Đăng nhập</a></span>
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
            header('location:link/Rolex/index.php');
       
}
else if(isset($_POST['sub']) and $_POST['sele']=='Hublot'){
    header('location:link/Hublot/index.php');

}
else if(isset($_POST['sub']) and $_POST['sele']=='Richard Mille'){
    header('location:link/RichardMille/index.php');

}
else if(isset($_POST['sub']) and $_POST['sele']=='Đồng hồ cơ'){
    header('location:link/CoNam/index.php');

}
else if(isset($_POST['sub']) and $_POST['sele']=='Đồng hồ thông minh'){
    header('location:link/ThongMinhNu/index.php');

}
?>
            
<script></script>
        </div>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="#">Thương hiệu</a>
                <ul class="menucon">
                    <li><a href="link/Rolex/index.php">Rolex</a></li>
                    <li><a href="link/Hublot/index.php">Hublot</a></li>
                    <li><a href="link/RichardMille/index.php">Richard Mille</a></li>
                </ul>
            </li>
            <li><a href="#">Sản phẩm</a>
                <ul class="menucon">
                    <li><a href="#">Đồng hồ nam</a>
                        <ul class="menuchau">
                            <li><a href="link/ThachAnhNam/index.php">Đồng hồ thạch anh</a></li>
                            <li><a href="link/CoNam/index.php">Đồng hồ cơ</a></li>
                            <li><a href="link/ThongMinhNam/index.php">Đồng hồ thông minh</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Đồng hồ nữ</a>
                        <ul class="menuchau">
                            <li><a href="link/ThachAnhNu/index.php">Đồng hồ thạch anh</a></li>
                            <li><a href="link/CoNu/index.php">Đồng hồ cơ</a></li>
                            <li><a href="link/ThongMinhNu/index.php">Đồng hồ thông minh</a></li>
                        </ul>
                    </li>
                    <li><a href="link/PhuKien/index.php">Phụ kiện</a></li>
                </ul>
            </li>
            <li><a href="#">Bài viết</a></li>
            <li><a href="lienhe.php">Liên hệ</a></li>
        </ul>
    </div>

    <center><h2>Liên hệ</h2></center>

<div id="content">
    <div id="left">
        <h4>HỆ THỐNG CỬA HÀNG</h4>
        <hr>
        <p>
            <span id='s1'>Địa chỉ:</span> 
            <span id='s2'>Ngõ 11 đường Tây Tựu, phường Thượng Cát, Quận Bắc Từ Liêm, Hà Nội
            </span> 
            <br><br>
            <span id='s1'>Số điện thoại: </span>
             <span id='s2'>0981.796.642</span> 
             <br><br>
            <span id='s1'>Mail: </span> 
            <span id='s2'>trannguyenhn2000@gmail.com</span> 
            <br><br>
            <span id='s1'>Kinh Doanh Thương Hiệu: </span> 
            <span id='s2'>Casio, Citizen, Orient, Seiko, OP, Titan</span> 
            <br><br>
            <span id='s1'>Giờ Mở Cửa: </span> 
            <span id='s2'>7h – 21h</span>
             <br>
        </p>
    </div>
    <div id="center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d904.6200332390115
        !2d105.82650303837053!3d21.012286536977648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
        1!2m1!1zc2hvcCDEkeG7k25nIGjhu5M!5e0!3m2!1svi!2s!4v16099500166
        20!5m2!1svi!2s" width="420" height="350" frameborder="0" style="border:1px gray solid;" 
        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div id="right">
    <h4>VỀ CHÚNG TÔI</h4>
        <hr>
        <p>
            <span id='s1'>Đồng hồ Bình Minh </span> 
            <span id='s2'>tự hào là nhà cung cấp đồng hồ uy tín , chất lượng. Chuyên cung cấp các mặt hàng đồng hồ chính hãng như Casio 
                ( Japan), Citizen ( Japan), Titan (India),… cùng các mặt hàng đồng hồ, mắt kính thời trang cao cấp.
            </span> 
            <br><br>
            <span id='s1'>Mục tiêu: </span>
            <ul>
                <li>Hướng đến trở thành 1 thương hiệu cung cấp đồng hồ uy tín trên thị trường Việt Nam.</li><br>
                <li>Luôn lấy ”chăm sóc khách hàng” làm tiêu chí hàng đầu.</li><br>
                <li>Luôn tạo ấn tượng và hài lòng tuyệt đối từ khách hàng.</li><br>
                <li>Đảm bảo cung cấp tới khách hàng những mặt hàng chất lượng nhất.</li>
            </ul>
             
             <br>
        </p>
    </div>
</div>


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
    

    <script src="link/Bootstrap/jquery-3.2.1.js"></script>
    <script src="link/Bootstrap/popper.min.js"></script>
    <script src="link/Bootstrap/bootstrap.min.js"></script>
</body>

</html>