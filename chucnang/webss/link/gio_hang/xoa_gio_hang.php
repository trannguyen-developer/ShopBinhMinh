<?php
   $link1= new mysqli("localhost","root","","datn");
$id=$_GET['id'];
if(isset($_GET['id'])){
    $sql="DELETE FROM giohang where MaSP='$id'";
    mysqli_query($link1,$sql);
    header('location: index.php');
}
else{
    echo "loi";
}
?>