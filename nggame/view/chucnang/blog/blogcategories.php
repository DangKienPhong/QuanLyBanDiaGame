<?php

include_once "../controller/blogcategoriescontroller.php";
?>
 <!-- Blog Section Begin -->
 <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Chuyên mục</h4>
                            <?php
                                while ($row_dm = mysqli_fetch_array($query_dm)) 
                                {   
                            ?>
                            <ul>
                                <li><a href="index.php?page_layout=blog-categories&id_dm_bv=<?php echo $row_dm['id_dm_bv'] ?>"><?php echo $row_dm['ten_dm_bv'] ?></a></li> 
                            </ul>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Bài đăng mới nhất</h4>
                            <div class="blog__sidebar__recent">
                            <?php
                                while ($row_bv = mysqli_fetch_array($query_bv)) 
                                {   
                            ?>
                                <a href="index.php?page_layout=blog-details&id_bv=<?php echo $row_bv['id_bv'] ?>" class="blog__sidebar__recent__item">
                                    <div  class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/<?php echo $row_bv['ten_hinhanh']; ?>" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6><?php echo $row_bv['ten_bv'] ?></h6>
                                        <span><?php echo $row_bv['ngay_tao'] ?></span>
                                    </div>
                                </a>

                                
                            <?php
                                }
                            ?>
                                
                            </div>
                        </div>
                        <!-- <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Apple</a>
                                <a href="#">Beauty</a>
                                <a href="#">Vegetables</a>
                                <a href="#">Fruit</a>
                                <a href="#">Healthy Food</a>
                                <a href="#">Lifestyle</a>
                            </div>
                        </div> -->
                    </div>
                </div>