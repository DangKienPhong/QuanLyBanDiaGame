<?php
    $sql_bv="SELECT * FROM baiviet INNER JOIN hinhanhbv on baiviet.id_bv = hinhanhbv.id_bv WHERE hinhanhbv.ten_hinhanh LIKE '%bia%' LIMIT 4";
    $query_bv=mysqli_query($conn,$sql_bv); 

    $sql_dm="SELECT * FROM danhmucbv";
    $query_dm=mysqli_query($conn,$sql_dm); 
?>