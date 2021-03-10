<?php

include "../config.php";

$id=$_GET['id'];
if(isset($_GET['id'])){
    $sql="DELETE FROM muahang where MaSP='$id'";
    mysqli_query($link,$sql);
    header('location: admindonhang.php');
}
else{
    echo "loi";
}
?>