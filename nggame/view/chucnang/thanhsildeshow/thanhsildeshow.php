    
    <?php
     include_once '../controller/thanhsildeshowcontroller.php'; 
     
     ?>
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php
                    while($row = mysqli_fetch_array($query))
                    {
                    ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"  data-setbg="img/banner/<?php echo $row['background_dm_sp']; ?>">
                            <h5><a href="index.php?page_layout=shop-gridcategories&id_dm_sp=<?php echo $row['id_dm_sp']; ?>"><?php echo $row['ten_dm_sp']; ?></a></h5>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    
                    
                </div>
            </div>
        </div>
    </section>

