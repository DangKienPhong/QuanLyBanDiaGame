
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Các bài viết nổi bật</h2>
                        <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                            <span>Bài viết</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blogcategories -->
<?php include_once './chucnang/blog/blogcategories.php'; ?>
 <!-- blogcategories -->
<?php include_once "../controller/blogcontroller.php"; ?>  
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                <?php 
                    while($row_bv = mysqli_fetch_array($query_bv))
                    {
                ?>
            
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                            <div class="blog__item__pic">
                            <img src="img/blog/<?php echo $row_bv['ten_hinhanh'] ?>" alt="">
                            </div>
                    <div class="blog__item__text">
                    <ul>
                            <li><i class="fa fa-calendar-o"></i> <?php echo $row_bv['ngay_tao'] ?></li>
                            
                        </ul>
                        <h5><a href="index.php?page_layout=blog-details&id_bv=<?php echo $row_bv['id_bv'] ?>"><?php echo $row_bv['ten_bv'] ?></a></h5>
                        <p><?php echo $row_bv['tom_tat'] ?></p>
                                    <a href="index.php?page_layout=blog-details&id_bv=<?php echo $row_bv['id_bv'] ?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ?>


                        
                        

                        <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                <img src="img/blog/the-witcher-3.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                <ul>
                            <li><i class="fa fa-calendar-o"></i> 15/11/2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="blog-details.php">Phiên bản The Witcher 3: Wild Hunt dành cho console next-gen sẽ cập bến vào nửa cuối 2021</a></h5>
                        <p>Vậy là sắp tới, người hâm mộ sẽ có thể trải nghiệm The Witcher 3: Wild Hunt trên PS5 và Xbox Series X/S rồi</p>
                                    <a href="blog-details.php" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/valorant.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">VNG chính thức phát hành Valorant tại Việt Nam vào ngày 06.04</a></h5>
                                    <p>Theo thông cáo chính thức từ VNG, tựa game chiến thuật FPS Valorant sẽ ra mắt tại Việt Nam vào ngày 6 tháng 4 năm 2021. Cũng vào khoảng thời điểm này năm ngoái </p>
                                    <a href="blog-details.php" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->
                    
                    
                        

                    </div>
                    <div class="product__pagination">
                    <?php
                        //module thanh số trang 1 2 3
                        //include_once './chucnang/thanhsotrang/thanhsotrang-shop-grid.php';
                        echo $listpage;
                        
                    ?>
                </div>
                </div>
            </div>
        </div>
     </section>

    

