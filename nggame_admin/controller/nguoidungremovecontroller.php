<?php
session_start();
if($_SESSION['user_name']){
    $id_user=$_GET["id_user"];
    include_once "../ketnoisql/ketnoi.php";
   
    $sql = "DELETE FROM users WHERE id_user = '$id_user'";
    $query = mysqli_query($conn,$sql);
    header('location:../view/quantri.php?page_layout=quanlynguoidung');
}
else{
    header('location:../view/index.php');
}


?>
