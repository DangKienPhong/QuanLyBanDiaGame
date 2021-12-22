<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <?php include "layout/headerpage.php"; ?>

</head>

<body>
    <!-- Left Panel -->
    <?php include "layout/headerpannel.php"; ?>

    <!-- Header-->

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Quản lý đơn hàng</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý đơn hàng</a></li>
                                <li class="active">Chi tiết đơn hàng</li>
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
                            <strong>Chi tiết đơn hàng</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã đơn hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="txt_ma" value="100047" class="form-control" readonly="readonly"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tên khách hàng</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" value="Phạm Tiến Long"  class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Ngày lập</label></div>
                                    <di class="col-12 col-md-9"><input type="datetime"id="text-input" id="password-input" name="password-input" value="20/08/2021"  class="form-control" readonly="readonly"></di>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input"  class=" form-control-label">Ngày giao</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" value="22/08/2021"  class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  for="text-input"class=" form-control-label">Nơi giao</label></div>
                                    <div class="col-12 col-md-9"><input type="text"id="text-input"  name="text-input" value="TPHCM"  class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hình thức thanh toán</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" value="Tiền mặt"  class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Tình trạng</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" value="Đã giao hàng"  class="form-control" readonly="readonly"></div>
                                </div>
                                <div class="row form-group">
                                <table class="table table-striped table-bordered" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        
                                    <tr role="row">
                                                <th class="sorting col-md-1">STT</th>
                                                <th class="sorting_asc col-md-2">Mã sản phẩm</th>
                                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                                <th class="sorting col-md-2">Số lượng</th>
                                                <th class="sorting col-md-2">Giá tiền</th>
                                        
                                        </thead>
                                        <tbody>
                                     
                                            <tr>
                                                <td>1</td>
                                                <td>012340</td>
                                                <td>3000 Từ Vựng Tiếng Anh Thông Dụng Nhất</td>
                                                <td>1</td>
                                                <td>₫128.000</td>
                                              
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>012341</td>
                                                <td>Very Easy Toeic 2 - Build Up</td>
                                                <td>2</td>
                                                <td>₫142.000</td>
                                            
                                            </tr>
                                        <tr>
                                            <td colspan="4"><b>Tổng tiền</b></td>
                                            <td colspan="1"><b class="text-red">₫270.000</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>



            </div>
            <?php include "layout/buttonbackpage.php"; ?>
        </div><!-- .animated -->
    </div><!-- .content -->

    <?php include "layout/footerpage.php"; ?>


</body>

</html>