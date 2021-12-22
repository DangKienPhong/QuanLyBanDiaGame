
<?php
$id_bv=$_GET["id_bv"];
$sqlcc = "SELECT * FROM danhmucbv ";
$querycc = mysqli_query($conn, $sqlcc);
$sql="SELECT * FROM baiviet WHERE id_bv=$id_bv";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
if(isset($_POST['submit'])){
    $ten_bv=$_POST['txt_ten'];
    $tac_gia = $_POST['txt_tacgia'];
    $tom_tat= $_POST['txt_tomtat'];
    $noi_dung = $_POST['txt_noidung'];
    $id_dm_bv=$_POST['id_dm_bv'];
  
    if(isset($ten_bv)&&isset($tac_gia)&&isset($tom_tat)&&isset($noi_dung)&&isset($id_dm_bv)){
      
        
        $sql="UPDATE baiviet SET id_dm_bv='$id_dm_bv',ten_bv='$ten_bv',tac_gia='$tac_gia',tom_tat='$tom_tat',noi_dung='$noi_dung'WHERE id_bv=$id_bv";
        $query = mysqli_query($conn, $sql);
        header("location:quantri.php?page_layout=quanlybaiviet");
        
    }
}
?>