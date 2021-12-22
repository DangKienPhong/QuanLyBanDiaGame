
<?php
include_once '../controller/danhmucbaiviet-edit-controller.php';
?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Quản lý danh mục bài viết</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý danh mục bài viết</a></li>
                                    <li class="active">Chi tiết mô tả</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Chi tiết mô tả</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Tên danh mục</label></div>
                                        <div class="col-12 col-md-9">
                                        <input type="text" id="email-input" name="" value="<?php if(isset($_POST['ten_dm_bv'])){echo $_POST['ten_dm_bv'];}else {echo $row['ten_dm_bv'];}  ?>" readonly="readonly" class="form-control">
                                        </div>
                                    </div>

                                  
                                   
                                    
                                 
                    
                                 
                                </form>
                            </div>
                          
                        </div>
                   
                    </div>



                </div>
                <?php include "layout/buttonbackpage.php"; ?>
            </div><!-- .animated -->
        </div><!-- .content -->
