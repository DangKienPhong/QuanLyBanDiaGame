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
                                    <li class="active">Chỉnh sửa thông tin sản phẩm</li>
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
                                <strong>Chỉnh sửa thông tin sản phẩm</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="controller/sanpham-edit-controller.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã sản phẩm cần sửa</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txt_ma" placeholder="012340" class="form-control" readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="name-input" name="txt_ten" placeholder="nhập tên sản phẩm" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="date-input" class=" form-control-label">Ngày nhập</label></div>
                                        <div class="col-12 col-md-9"><input type="datetime-local" id="date-input" name="txt_ngaynhap" placeholder="nhập ngày nhập sản phẩm" class="form-control"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Nội dung chi tiết</label></div>
                                        <div class="col-12 col-md-9"><textarea name="txt_noidung" id="txt_noidung" rows="9" placeholder="Nhập nội dung tại đây" class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Chọn loại Sản phẩm</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="sel_theloai" id="select-input" class="form-control">
                                                <option value="0">Xin chọn thể loại sách</option>
                                                <option value="Tiếng anh">Tiếng anh</option>
                                                <option value="Tiếng trung">Tiếng trung</option>
                                                <option value="Tiếng pháp">Tiếng pháp</option>
                                                <option value="Tiếng hàn">Tiếng hàn</option>
                                                <option value="Lớp 1 -> lớp 6">Lớp 1 -> lớp 6</option>
                                                <option value="Lớp 7 -> lớp 12">Lớp 7 -> lớp 12</option>
                                                <option value="Kỹ năng nấu ăn">Kỹ năng nấu ăn</option>
                                                <option value="Rèn luyện tinh thần">Rèn luyện tinh thần</option>
                                                <option value="Phát triển bản thân">Phát triển bản thân</option>
                                                <option value="Phát triển tư duy - kỹ năng mềm">Phát triển tư duy - kỹ năng mềm</option>
                                                <option value="Nhân vật - Bài học kinh doanh">Nhân vật - Bài học kinh doanh</option>
                                                <option value="Marketing - Bán Hàng">Marketing - Bán Hàng</option>
                                                <option value="Khởi nghiệp - Làm giàu">Khởi nghiệp - Làm giàu</option>
                                                <option value="Phân tích kinh tể">Phân tích kinh tể</option>
                                                <option value="Tài chính ngân hàng">Tài chính ngân hàng</option>
                                                <option value="Shounen">Shounen</option>
                                                <option value="Fantasy">Fantasy</option>
                                                <option value="Drama">Drama</option>
                                                <option value="Action">Action</option>
                                                <option value="Mystery">Mystery</option>
                                                <option value="Tiểu thuyết">Tiểu thuyết</option>
                                                <option value="Truyện ngắn - Tản văn">Truyện ngắn - Tản văn</option>
                                                <option value="Tác phẩm kinh điển">Tác phẩm kinh điển</option>
                                                <option value="Ngôn tình">Ngôn tình</option>
                                                <option value="Thể loại khác">Thể loại khác</option>

                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Đơn giá</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="stt-input" name="txt_giatien" placeholder="nhập đơn giá của sản phẩm" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="stt-input" name="txt_soluong" placeholder="nhập số lượng" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Hình ảnh sản phẩm</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="file_upload" class="form-control-file"></div>
                                    </div>
                                    <!-- <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                    </div> -->
                                    <div  style="float:right;">
                                <button type="submit" class="btn btn-primary " name="bnt_XuLy" value="submit">
                                    <i class="fa ti-plus"></i> Thêm
                                </button>
                                <button type="submit" class="btn btn-warning" name="bnt_XuLy" value="reset">
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

        <?php include "layout/footerpage.php";?>


</body>

</html>