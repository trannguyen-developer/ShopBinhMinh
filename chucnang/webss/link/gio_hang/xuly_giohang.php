<?php
   $link= new mysqli("localhost","root","","datn");
   $link1= new mysqli("localhost","root","","datn");

session_start();
$user=$_SESSION['user'];
$masp = $_GET['id'];
$query="SELECT * FROM sanpham where MaSP= '$masp' ";
    $result=mysqli_query($link,$query);
    $num=mysqli_fetch_array($result);
    $masp=$num['MaSP'];
    $tensp=$num['TenSP'];
    $anh=$num['Anh'];
    $gia=$num['GiaKM'];
    
    $sql ="INSERT INTO giohang (UserName, MaSP, TenSP, Anh, Gia, soLuong) VALUES ('$user', '$masp', '$tensp', '$anh', '$gia', 1)";
$query2="SELECT * FROM giohang where MaSP='$masp' and UserName='$user' ";
$result2=mysqli_query($link1,$query2);
$num2=mysqli_num_rows($result2);
        $query4="SELECT * FROM giohang where MaSP='$masp' and UserName='$user' ";
        $result4=mysqli_query($link1,$query4);
        $num4=mysqli_fetch_array($result4);
if(isset($_SESSION['user'])){
    if($num2==0){
        mysqli_query($link1,$sql);
        header('location:index.php');
    }
    else{
        $cong=$num4['soLuong']+1;
        $query3="UPDATE giohang SET soLuong='$cong' where MaSP='$masp' and UserName='$user'";
        $result3=mysqli_query($link1,$query3);
        header('location:index.php');    
    }
    
}
?>

<?php
// $query2="SELECT * FROM giohang where MaSP='R2'";
// $result2=mysqli_query($link1,$query2);
// $num=mysqli_num_rows($result2);
// session_start();
//     if($num>0){
//         header('location:youtub.com');

//     }
//     else{
//         header('location:index.php');
//     }
 
?>