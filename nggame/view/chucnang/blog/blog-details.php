<?php
include "../controller/blogdetailcontroller.php";
?>
<div>
    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="img/banner/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2><?php echo $row_bv['ten_bv'] ?></h2>
                        <ul>
                            <li>By <?php echo $row_bv['tac_gia'] ?></li>
                            <li><?php echo $row_bv['ngay_tao'] ?></li>
                            <!-- <li>8 Comments</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- blogcategories -->
    <?php include_once './chucnang/blog/blogcategories.php'; ?>
    <!-- blogcategories -->
    <div class="col-lg-8 col-md-7 order-md-1 order-1">
        <div class="blog__details__text">
            <?php while ($row_ha = mysqli_fetch_array($query_ha)) 
            {
            ?>
                
                <img src="img/blog/<?php echo $row_ha['ten_hinhanh'] ?>" alt="">
            <?php
            }
            ?>
            <p> <?php include "../controller/blogdetailcontroller.php";?>
            &emsp;
        
                <?php
            
                 echo $row_bv['noi_dung'] ?></p>
        </div>
        <div class="blog__details__content">
            <div class="row">
                <!-- <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>Michael Scofield</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div> -->
                <div class="col-lg-6">
                    <div class="blog__details__widget">
                        <ul>
                            <li><span>Danh mục: </span><button class="primary-btn" href="index.php?page_layout=blog-categories&id_dm_bv=<?php echo $row_dm['id_dm_bv'] ?>"><?php echo $row_dm['ten_dm_bv'] ?></button> </li>
                            <!-- <li><span>Tags:</span> Gaming, Hướng dẫn, News</li> -->
                        </ul>
                        <div class="blog__details__social">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a>
                            <a href="https://mail.google.com/"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <?php include_once './chucnang/blog/relatedblogsection.php'; ?>
    <!-- Related Blog Section End -->
