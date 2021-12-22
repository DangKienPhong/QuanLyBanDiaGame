<?php
    $sql_bv="SELECT * FROM baiviet INNER JOIN hinhanhbv on baiviet.id_bv = hinhanhbv.id_bv WHERE hinhanhbv.ten_hinhanh LIKE '%bia%' LIMIT 3 ";
    $query_bv=mysqli_query($conn,$sql_bv); 
    
?>