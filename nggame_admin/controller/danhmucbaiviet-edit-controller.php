
<?php

$id_dm_bv=$_GET["id_dm_bv"];
$sql="SELECT * FROM danhmucbv WHERE id_dm_bv=$id_dm_bv";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
if(isset($_POST['submit'])){
    $ten_dm_bv=$_POST['txt_ten'];
    if(isset($ten_dm_bv)){
        $sql="UPDATE danhmucbv SET ten_dm_bv = '$ten_dm_bv' WHERE id_dm_bv=$id_dm_bv";
        $query=mysqli_query($conn, $sql);
        header("location:quantri.php?page_layout=quanlydanhmucbaiviet");
    }
    
}

?>