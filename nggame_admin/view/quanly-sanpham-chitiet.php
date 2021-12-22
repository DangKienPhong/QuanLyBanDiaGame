<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
   <?php include "layout/headerpage.php";?>

</head>

<body>
    <!-- Left Panel -->
    <?php include "layout/headerpannel.php";?>
   
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Quản lý sản phẩm</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý sản phẩm</a></li>
                                    <li class="active">Chi tiết sản phẩm</li>
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
                                <strong>Chi tiết sản phẩm</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <!-- <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">STT</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="txt_ten" placeholder="1"  class="form-control"></div>
                                    </div> -->
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txt_ma" placeholder="012340" class="form-control" readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tên sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="txt_ten" placeholder="Very Easy Toeic 2 - Build Up"  class="form-control"readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Ngày nhập</label></div>
                                        <di/v class="col-12 col-md-9"><input type="datetime" id="password-input" name="password-input" placeholder="20/08/2020"  class="form-control"readonly="readonly"></di>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung chi tiết</label></div>
                                        <div class="col-12 col-md-9"><textarea name="txt_noidung" id="txt_noidung" rows="9"  placeholder="Nội dung của sản phẩm" class="form-control"readonly="readonly"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Loại Sản phẩm</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="sel_theloai" id="select-input" class="form-control"readonly="readonly" >
                                                <option value="Tiếng anh">Tiếng anh</option>
                                                

                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Đơn giá</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="stt-input" name="txt_giatien" placeholder="₫142.000" class="form-control" readonly="readonly"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Số lượng</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="disabled-input" placeholder="30"  class="form-control"readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình ảnh sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="disabled-input" placeholder="Không có tệp hình ảnh đính kèm"  class="form-control"readonly="readonly"></div>
                                    </div>
                                    
                                    
                                    
                                   
                                    
                                 
                                
                                 
                                </form>
                            </div>
                          
                        </div>
                   
                    </div>



                </div>
                <?php include "layout/buttonbackpage.php"; ?>
            </div><!-- .animated -->
        </div><!-- .content -->

        <?php include "layout/footerpage.php";?>


</body>

</html>