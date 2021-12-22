<?php
session_start();
if($_SESSION['user_name']){
    $id_bv=$_GET["id_bv"];
    include_once "../ketnoisql/ketnoi.php";
    $sql = "DELETE FROM baiviet WHERE id_bv = '$id_bv'";
    $query = mysqli_query($conn,$sql);
    header('location:../view/quantri.php?page_layout=quanlybaiviet');
}
else{
    header('location:../view/index.php');
}


?>
