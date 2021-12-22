<?php
$id_don_hang=$_GET["id_don_hang"];
$sql_chitiet="SELECT * FROM chitietdonhang WHERE id_don_hang=$id_don_hang";
$query_chitiet=mysqli_query($conn,$sql_chitiet);
//$row_chitiet=mysqli_fetch_array($query_chitiet);

$sql_donhang="SELECT * FROM donhang WHERE id_don_hang=$id_don_hang";
$query_donhang=mysqli_query($conn,$sql_donhang);
$row_donhang=mysqli_fetch_array($query_donhang);

?>