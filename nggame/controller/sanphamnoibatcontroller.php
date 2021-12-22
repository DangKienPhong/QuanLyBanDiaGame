<?php
    $sql_all= "SELECT * FROM sanpham LIMIT 8";
    $query_all=mysqli_query($conn,$sql_all);

    $sql_hanhdong = "SELECT * FROM sanpham WHERE id_danhmuc = 1 LIMIT 4";
    $query_hanhdong=mysqli_query($conn,$sql_hanhdong);

    $sql_rpg = "SELECT * FROM sanpham WHERE id_danhmuc = 2 LIMIT 4";
    $query_rpg=mysqli_query($conn,$sql_rpg);

    $sql_dausung = "SELECT * FROM sanpham WHERE id_danhmuc = 10 LIMIT 4";
    $query_dausung=mysqli_query($conn,$sql_dausung);
?>