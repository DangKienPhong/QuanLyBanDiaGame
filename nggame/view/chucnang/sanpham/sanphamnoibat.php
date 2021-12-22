<?php
    include_once '../controller/sanphamnoibatcontroller.php';
?>
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".Action">Hành động</li>
                            <li data-filter=".RPG">RPG</li>
                            <li data-filter=".FPS">Đấu Súng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <!-- Game Hành động -->
                <?php while($row_hanhdong = mysqli_fetch_array($query_hanhdong))
                {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Action">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../../nggame_admin/view/pictures/<?php echo $row_hanhdong['anh_sp']?>">
                        <ul class="featured__item__pic__hover">
                                <li><a href="index.php?page_layout=shop-details&id_sp=<?php echo $row_hanhdong['id_sp']; ?>"><i class="fa fa-search"></i></a></li>
                                    <li><a href="index.php?page_layout=shop-grid"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="chucnang/giohang/themhang.php?id_sp=<?php echo $row_hanhdong['id_sp']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="index.php?page_layout=shop-details&id_sp=<?php echo $row_hanhdong['id_sp']; ?>"><?php echo $row_hanhdong['ten_sp']; ?></a></h6>
                            <h5><?php  echo number_format($row_hanhdong['don_gia'], 0, '', '.')." VNĐ"; ?></h5>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

                <!-- Game RPG -->
                <?php while($row_rpg = mysqli_fetch_array($query_rpg))
                {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix RPG">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../../nggame_admin/view/pictures/<?php echo $row_rpg['anh_sp']?>">
                        <ul class="featured__item__pic__hover">
                                <li><a href="index.php?page_layout=shop-details&id_sp=<?php echo $row_rpg['id_sp']; ?>"><i class="fa fa-search"></i></a></li>
                                    <li><a href="index.php?page_layout=shop-grid"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="chucnang/giohang/themhang.php?id_sp=<?php echo $row_rpg['id_sp']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="index.php?page_layout=shop-details&id_sp=<?php echo $row_rpg['id_sp']; ?>"><?php echo $row_rpg['ten_sp']; ?></a></h6>
                            <h5><?php  echo number_format($row_rpg['don_gia'], 0, '', '.')." VNĐ"; ?></h5>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

                <!-- Game Đấu Súng -->
                <?php while($row_dausung = mysqli_fetch_array($query_dausung))
                {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix FPS">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../../nggame_admin/view/pictures/<?php echo $row_dausung['anh_sp']?>">
                        <ul class="featured__item__pic__hover">
                                <li><a href="index.php?page_layout=shop-details&id_sp=<?php echo $row_dausung['id_sp']; ?>"><i class="fa fa-search"></i></a></li>
                                    <li><a href="index.php?page_layout=shop-grid"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="chucnang/giohang/themhang.php?id_sp=<?php echo $row_dausung['id_sp']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="index.php?page_layout=shop-details&id_sp=<?php echo $row_dausung['id_sp']; ?>"><?php echo $row_dausung['ten_sp']; ?></a></h6>
                            <h5><?php  echo number_format($row_dausung['don_gia'], 0, '', '.')." VNĐ"; ?></h5>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

                


               
               
            </div>
            <div style="text-align:center;">
                <a href="index.php?page_layout=shop-grid" class="primary-btn">Xem thêm</a>
                </div>
        </div>
    </section>

