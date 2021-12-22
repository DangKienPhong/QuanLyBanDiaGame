
<?php

$sqlcc = "SELECT * FROM danhmucbv ";
$querycc = mysqli_query($conn, $sqlcc);
if(isset($_POST['submit'])){
    $ten_bv=$_POST['txt_ten'];
    $tac_gia = $_POST['txt_tacgia'];
    $tom_tat= $_POST['txt_tomtat'];
    $noi_dung = $_POST['txt_noidung'];
    $id_dm_bv=$_POST['id_dm_bv'];
  
    if(isset( $ten_bv)&&isset($tac_gia)&&isset($tom_tat)&&isset($noi_dung)&&isset($id_dm_bv)){
      
        
        $sql="INSERT INTO baiviet(id_dm_bv,ten_bv,tac_gia,tom_tat,noi_dung)
         VALUES('$id_dm_bv','$ten_bv','$tac_gia','$tom_tat','$noi_dung')";
        $query = mysqli_query($conn, $sql);
        header("location:quantri.php?page_layout=quanlybaiviet");
        
    }
}
?>