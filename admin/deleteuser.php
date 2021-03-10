<?php
include "../config.php";
$id=$_GET['ten'];
if(isset($_GET['ten'])){
    $sql="DELETE FROM users where UserName='$id'";
    mysqli_query($link,$sql);
    header('location: adminuser.php');
}
else{
    echo "loi";
}
?>