<?php
session_start();
if($_SESSION['user_name']){
    $id_sp=$_GET["id_sp"];
    include_once "../ketnoisql/ketnoi.php";
   
    $sql = "DELETE FROM sanpham WHERE id_sp = '$id_sp'";
    $query = mysqli_query($conn,$sql);
    header('location:../view/quantri.php?page_layout=quanlysanpham');
}
else{
    header('location:../view/index.php');
}


?>
