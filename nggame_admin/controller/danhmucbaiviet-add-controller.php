
<?php

include_once "../ketnoisql/ketnoi.php";

if(isset($_POST['submit'])){
    $ten_dm_bv=$_POST['txt_ten'];
   
   
    if(isset($ten_dm_bv)){
    
        $sql="INSERT INTO danhmucbv(ten_dm_bv)VALUES('$ten_dm_bv')";
        $query = mysqli_query($conn, $sql);
        header("location:../view/quantri.php?page_layout=quanlydanhmucbaiviet");
        
    }
}

?>