
<?php
include_once "../controller/baivietaddcontroller.php";
?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Quản lý bài viết</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý bài viết</a></li>
                                    <li class="active">Thêm bài viết</li>
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
                            
                            <div class="card-body card-block">
                                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên bài viết</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="txt_ten" name="txt_ten" placeholder="" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên tác giả</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="txt_tacgia" name="txt_tacgia" placeholder="" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Chọn danh mục bài viết</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="id_dm_bv" id="select-input" class="form-control">
                                                <option value="unselect">Xin chọn danh mục bài viết</option>
                                                <?php 
                                               while ($rowcc = mysqli_fetch_array($querycc)){
                                                ?>
                                                <option value="<?php echo $rowcc['id_dm_bv']?>"><?php echo $rowcc['ten_dm_bv']?></option>
                        
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tóm tắt</label></div>
                                        <div class="col-12 col-md-9"><textarea type="email" id="email" name="txt_tomtat" placeholder="" class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nội dung</label></div>
                                        <div class="col-12 col-md-9"><textarea type="text" id="dia_chi" name="txt_noidung" placeholder="" class="form-control"></textarea></div>
                                    </div>
                                    
                                    <div  style="float:right;">
                                <button type="submit" class="btn btn-primary" name="submit" value="submit">
                                    <i class="fa ti-plus"></i> Thêm
                                </button>
                                <button type="reset" class="btn btn-warning" name="bnt_xuly" value="reset">
                                    <i class="fa ti-reload"></i> Reset
                                </button>
                            </div>
                                </form>
                            </div>
                          
                        </div>
                   
                    </div>



                </div>
                <?php include "layout/buttonbackpage.php"; ?>
            </div><!-- .animated -->
        </div><!-- .content -->

