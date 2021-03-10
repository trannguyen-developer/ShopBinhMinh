<?php
include "../config.php";
$id=$_GET['id'];
if(isset($_GET['id'])){
    $sql="DELETE FROM sanpham where MaSP='$id'";
    mysqli_query($link,$sql);
    header('location: adminsp.php');
}
else{
    echo "loi";
}
?>