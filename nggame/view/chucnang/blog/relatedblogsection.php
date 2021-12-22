<?php include_once "../controller/relatedblogcontroller.php"; ?> 
<section class="related-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related-blog-title">
                    <h2>Các bài viết nổi bật</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php while($row_bv = mysqli_fetch_array($query_bv))
                    { 
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                    <img src="img/blog/<?php echo $row_bv['ten_hinhanh'] ?>" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> <?php echo $row_bv['ngay_tao'] ?></li>
                            <!-- <li><i class="fa fa-comment-o"></i> 5</li> -->
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
            <!-- <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                    <img src="img/blog/maxresdefault (1).jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> 15/11/2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="blog-details.php">Đánh giá Spider-Man: Miles Morales – Nhện chuẩn “nhọ” phiêu lưu ký</a></h5>
                        <p>Spider-Man: Miles Morales đã xuất sắc nối bước thành công của người tiền nhiệm trước đây cũng như mở ra một chương mới cho series</p>
                    </div>
                </div>
            </div> -->
            
            
        </div>
        <div style="text-align:center; margin-bottom: 100px;">
                <a href="index.php?page_layout=blog" class="primary-btn">Xem thêm</a>
                </div>
    </div>
</section>