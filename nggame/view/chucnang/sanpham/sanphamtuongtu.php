
<?php
    
    $id_danhmuc_tt = $row['id_danhmuc'];
    $sql_sp_tuongtu = "SELECT * FROM sanpham WHERE id_danhmuc = $id_danhmuc_tt LIMIT 4";
    $query_sp_tuongtu=mysqli_query($conn,$sql_sp_tuongtu);
    while($row_sp_tt=mysqli_fetch_array($query_sp_tuongtu))
    {
?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Action FPS">
                <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../../nggame_admin/view/pictures/<?php echo $row_sp_tt['anh_sp']?>">
                        <ul class="featured__item__pic__hover">
                                <li><a href="index.php?page_layout=shop-details&id_sp=<?php echo $row_sp_tt['id_sp']; ?>"><i class="fa fa-search"></i></a></li>
                                    <li><a href="index.php?page_layout=shop-grid"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="chucnang/giohang/themhang.php?id_sp=<?php echo $row_sp_tt['id_sp']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                        </div>
                        <div class="featured__item__text">
                        <h6><a href="index.php?page_layout=shop-details&id_sp=<?php echo $row_sp_tt['id_sp']; ?>"><?php echo $row_sp_tt['ten_sp']; ?></a></h6>
                            <h5><?php  echo number_format($row_sp_tt['don_gia'], 0, '', '.')." VNĐ"; ?></h5>
                        </div>
                    </div>
                </div>

<?php
    }
?>