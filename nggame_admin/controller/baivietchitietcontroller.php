
<?php
$id_bv=$_GET["id_bv"];
$sqlcc = "SELECT * FROM danhmucbv ";
$querycc = mysqli_query($conn, $sqlcc);
$sql="SELECT * FROM baiviet WHERE id_bv=$id_bv";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);


?>