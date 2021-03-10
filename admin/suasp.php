<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tài khoản user</title>
    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="../link/Bootstrap/bootstrap.min.css" type="text/css">

</head>
<style>
#tbthem tr{
    text-align:left;
    height:40px;
}
#tbthem td{
    text-align:left;
}
</style>
<body>
    <?php
?>
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

<?php
  include "../config.php";
  $id=$_GET['id'];
$query="SELECT * FROM sanpham where MaSP='$id' ";
$result=mysqli_query($link,$query);
$num=mysqli_fetch_assoc($result);
?>
<form method="POST">

<center>
    <div id='themuser'>
        <h5>   Sửa sản phẩm:</h5><br>
        <table style="width:30%; text-align:left;" id='tbthem'>
        <tr>
        <td>Mã sản phẩm: </td>
        <td><input type='text' name='masp' value="<?php echo $num['MaSP']; ?>"></td>
        </tr>

        <tr>
        <td>Ảnh:</td>
        <td><input type='file' name='anh' value="<?php echo $num['Anh']; ?>"></td>
        </tr>
        
        <tr>
        <td>Tên sản phẩm:</td>
        <td><input type='text' name='tensp' value="<?php echo $num['TenSP']; ?>"></td>
        </tr>
        
        <tr>
        <td>Giá gốc:</td>
        <td><input type='text' name='giagoc' value="<?php echo $num['GiaGoc']; ?>"></td>
        </tr>
        
        <tr>
        <td>Giá KM: </td>
        <td><input type='text' name='giakm' value="<?php echo $num['GiaKM']; ?>"></td>
        </tr>
        
        <tr>
        <td>Kho:</td>
        <td><input type='number' min='0' name='kho' value="<?php echo $num['Kho']; ?>" ></td>
        </tr>
        
        <tr>
        <td>Loại</td>
        <td><input type='text' name='loai' value="<?php echo $num['Loai']; ?>"></td>
        </tr>
        </table>
        <br>
        <button name="sua"   class='btn btn-success'>Sửa</button>

    <div>
</center>
    <?php
if(isset($_POST['sua'])){
    $masp=$_POST['masp'];
    $anh=$_POST['anh'];
    $tensp=$_POST['tensp'];
    $giagoc=$_POST['giagoc'];
    $giakm=$_POST['giakm'];
    $kho=$_POST['kho'];
    $loai=$_POST['loai'];
$query2="UPDATE sanpham SET MaSP='$masp',Anh='$anh',TenSP='$tensp',GiaGoc='$giagoc',GiaKM='$giakm',Kho='$kho',Loai='$loai' where MaSP='$id' ";

mysqli_query($link,$query2);
header('location:adminsp.php');
}  


?>

</form>

    <script src="../link/Bootstrap/jquery-3.2.1.js"></script>
    <script src="../link/Bootstrap/popper.min.js"></script>
    <script src="../link/Bootstrap/bootstrap.min.js"></script>
</body>

</html>