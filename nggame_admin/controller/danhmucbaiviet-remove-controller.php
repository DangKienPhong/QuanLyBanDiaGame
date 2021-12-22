<?php
session_start();
if($_SESSION['user_name']){
    $id_dm_bv=$_GET["id_dm_bv"];
    include_once "../ketnoisql/ketnoi.php";
    $sql = "DELETE FROM danhmucbv WHERE id_dm_bv = '$id_dm_bv'";
    $query = mysqli_query($conn,$sql);
    header('location:../view/quantri.php?page_layout=quanlydanhmucbaiviet');
}
else{
    header('location:../view/index.php');
}


?>
