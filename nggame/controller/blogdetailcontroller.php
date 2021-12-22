<?php
$id_bv=$_GET["id_bv"];
$sql_dm="SELECT * FROM danhmucbv INNER JOIN baiviet on baiviet.id_dm_bv = danhmucbv.id_dm_bv and baiviet.id_bv='$id_bv' ";
$query_dm=mysqli_query($conn,$sql_dm);
$row_dm=mysqli_fetch_array($query_dm);

$sql_bv="SELECT * FROM baiviet WHERE id_bv = '$id_bv'";
$query_bv=mysqli_query($conn,$sql_bv); 
$row_bv=mysqli_fetch_array($query_bv);

$sql_ha="SELECT * FROM hinhanhbv WHERE id_bv = '$id_bv' ";
$query_ha=mysqli_query($conn,$sql_ha); 
?>