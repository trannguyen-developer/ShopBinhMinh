<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài viết</title>
    <link href="css/lienhe.css" rel="stylesheet">
    <link rel="stylesheet" href="link/Bootstrap/bootstrap.min.css" type="text/css">

</head>

<body style='background:gray;'>
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
    <div id="menu" style='background:white;'>
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
            <li><a href="baiviet.php">Bài viết</a></li>
            <li><a href="lienhe.php">Liên hệ</a></li>
        </ul>
    </div>
<div id='baiviet'  style='width:900px; margin-left:300px;
text-align:justify;background:white;padding-left:20px;
padding-right:20px;padding-top:50px;margin-top:-100px;padding-bottom:50px;'>
    <h4>4 lý do để bạn nên có một chiếc đồng hồ</h4>
    <div style='font-style:italic;'>
    Trong xã hội hiện nay với sự phát triển chóng mặt của điện thoại thông minh đồng hồ 
    đeo tay đang mất dần chỗ đứng trong một bộ phận các bạn trẻ . Tuy nhiên đồng hồ 
    không phải chỉ đề xem giờ mà nó còn mang lại cho bạn nhiều giá trị hơn thế.
    </div><br>
    Trong một thời đại mà hầu hết tất cả mọi người đều mang theo một chiếc điện  thoại 
    thông minh để giải quyết những nhu cầu thiết yếu như tìm kiếm , xem tin tức dự báo
     trong ngày và rất rất nhiều thứ khác nữa . Điều đó cũng giải thích lý do vì sao
      càng ngày bạn càng không cần một chiếc đồng hồ trên tay nữa. Điện thoại của bạn
       đang kiểm soát thời gian một cách tuyệt vời và nó dễ dàng cập nhật thời gian 
       ngay lập tức dù bạn có vừa sang một múi giờ hoàn toàn khác. Và vì thế mà trong tâm 
       trí bạn, hay nhiều người khác chiếc đồng hồ đã trở thành một phụ kiện lỗi thời với 
       chức năng khiêm tốn.
<br>
    Sự phát triển chóng mặt của các thiết bị điện thoại thông minh gần như giết chết đi
     chức năng xem giờ - một trong những chức năng quan trọng nhất của chiếc đồng hồ. Nhưng
      thực sự những điều tinh tế và ý nghĩa mà một chiếc đồng hồ đeo tay mang lại cho bạn 
      còn rất rất nhiều.
    <div style='text-align:center;'><br>
        <img src='images/bv1.png'>
    </div><br>
    Hãy để tôi nói với bạn điều này : “Nếu bạn là một chàng trai trên 18 tuổi bạn chắc chắn 
    phải có một chiếc đồng hồ ở trên tay trong bất cứ thời điểm nào, và lý do của việc đó 
    không nhất thiết chỉ để xem thời gian”. Vì vậy, nếu đeo đồng hồ không phải là để xem giờ,
     vậy đâu là lý do thực sự để một người đàn ông cần tới nó? Tôi sẽ nói cho bạn biết ngay
      sau đây.
    <div style='font-weight:bold;'><br>
    1. Lý do thứ nhất : Trong mắt người khác bạn sẽ trở nên khác biệt
    </div>
    
    <div>
    Một trong những điều quan trọng đầu tiên mà người khác khi nhìn thấy bạn, ngay trong 
    tiềm thức của họ là  đánh giá con người và khả năng làm việc của bạn dựa vào ngoại hình.
     Đó là quan niệm của rất nhiều người, khi bạn khoác lên mình một quần áo đẹp thì tất
      nhiên mọi thức thuộc về bạn đều tốt đẹp, còn ngược lại với một cách ăn mặc xuề xòa 
      thì bạn đã tự hạ thấp giá trị của bản thân mình đi rất nhiều lần.Chính vì lẽ đó, đeo
       một chiếc đồng hồ phù hợp không chỉ hoàn thiện bộ trang phục của bạn mà nó còn ngay
        lập tức ghi điểm với người đối diện rằng bạn là một người vô cùng tinh tế và thể hiện 
        mình là một người chu toàn trong công việc.
    </div>
    <div style='text-align:center;'>
    <br>
    <img  src='images/bv2.png'>
    <br>
    </div>
    <div>
    Nhớ rằng luôn chọn một chiếc đồng hồ phù hợp với cổ tay và bộ trang phục của bạn.
     Nếu bạn không có những kiến thức về thời trang – hãy chọn một chiếc đồng hồ dây 
     da đen kết hợp với bộ đồ màu đen hoặc ghi xám, an toàn nhưng không có nghĩa là 
     thiếu đi sự tinh tế.
    </div>
    <div style='font-weight:bold;'>
    <br>
    2. Lý do thứ hai : Một chiếc đồng hồ cho thấy bạn là người quý trọng thời gian
    <br>

    </div>
    <div>
    Bạn có biết những tuýp người như thế nào sẽ thường xuyên không đeo đồng hồ không?
     Với tôi phần lớn họ đều là những người rảnh rỗi và không có kế hoạch cho bản thân. 
     Và tôi cũng dám cá với bạn rằng họ sẽ rút từ túi quần ra chiếc điện thoại để xem giờ,
      rồi lại kèm theo vài động tác vuốt chạm để xem thế giới có thay đổi gì hay không 
      trên facebook . Vì thế mà nếu cuộc sống khiến bạn bận rộn hoặc bạn đang trân trọng 
      từng giây phút mỗi ngày và bạn muốn gửi đến người khác một thông điệp rằng: ”thời gian 
      là tài nguyên quý giá nhất trong cuộc đời này” thì đeo một chiếc đồng hồ là cách dễ 
      nhất để thể hiện điều đó. 

 
    </div>
    <div  style='text-align:center;'>
        <br>
    <img  src='images/bv3.png'>
    <br>
    </div>
    <div>
        <br>
    Hãy cứ thử làm theo lời tôi nói và bạn sẽ nhận ra sự khác biệt trong cách tiếp xúc của người 
    khác đối với bạn. Đó là sự tôn trọng mà bạn xứng đáng nhận được.
    <br>
    <div style='font-weight:bold;'>
    <br>
    3. Lý do thứ 3: Kể câu chuyện về bạn thông qua chiếc đồng hồ bạn đang đeo


    </div>
    <div>
    Thử nghĩ xem nếu bạn là người nổi tiếng? Hoặc một doanh nhân thành đạt. Bạn sẽ làm thế 
    nào để giới thiệu về bản thân mình để không bị coi là một kể khoe khoang, tự tâng
     bốc bản thân? Con người luôn đánh giá qua hình thức, như bộ đồ hiệu bạn đang mặc, 
     đôi giầy da xịn bạn đang đi, nhưng những thứ đó không nói lên cái tôi cá nhân của bạn
      được. Chỉ duy nhất một thứ có thể làm được điều đó, một thứ có thể khiến người khác
       hiểu bạn là ai, bạn quan trọng ra sao và bạn đã thành công như thế nào. Đó chính là 
       chiêc đồng hồ mà bạn chọn đeo. Mỗi thiết kế, mỗi chi tiết và giá trị của nó đều khắc
        họa đúng bản thân của người đeo.
    </div>
    <div  style='text-align:center;'>
        <br>
    <img  src='images/bv4.png'>
    <br>
    </div>
    <div>
        <br>
    Bạn sẽ trở thành người đơn giản, tinh tế với chiếc đồng hồ thiết kế minimalist.
     Sẽ mạnh mẽ với đồng hồ dây kim loại hay khẳng định thành công bản thân với những 
     chiếc đồng hồ Tourbillon phức tạp nhưng lại vô cùng đẳng cấp. 
    </div>
    <div style='font-weight:bold;'>
    <br >
    4. Lý do cuối cùng : Chiếc đồng hồ sẽ nói với tất cả mọi người rằng bạn đã trưởng thành
    <br>

    </div>
    <div>
    Đây cũng chính là lý do xác đáng nhất vì sao bạn cần phải có một chiếc đồng hồ. “Men wear watches and boys do not”.


    </div>
    <div  style='text-align:center;'>
        <br>
    <img  src='images/bv5.png'>
    <br>
    </div> 
       <div>Bạn đánh dấu sự trưởng thành của mình bằng cách khoác lên mình chiếc áo sơ 
           mi thay vì áo phông họa tiết, mặc quần âu thay vì quần jeans xắn gấu, đi 
           giày da thay vì sneaker màu sắc. Nhưng liệu rằng cứ “Suit up” là bạn sẽ trở 
           thành một người đàn ông? Tôi không nghĩ vậy, khi bạn ý thức được tầm quan
            trọng của thời gian, ý thức được sự lãng phí khi để thời gian trôi qua vô nghĩa,
             thì lúc đó bạn sẽ tự nhắc nhở bản thân mình bằng một cỗ máy tinh xảo và phức 
             tạp nhất trên thế giới này trên tay. Lúc đấy chiếc đồng hồ nó không còn là
              một món đồ trang sức đơn điệu nữa, mà nó chính là cột mốc đánh dấu sự trưởng 
              thành của bạn.</div>

</div>
</div>

    <div id="footer" >
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