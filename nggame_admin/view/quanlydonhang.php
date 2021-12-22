
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
                                    <li class="active">Hiển thị </li>
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

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh sách sản phẩm</strong>&nbsp;
                            </div>
                            <div class="card-body">
                            <a href="quantri.php?page_layout=quanlydonhangadd"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                        <th>STT</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Ngày lập</th>
                                        <th>Ngày giao</th>
                                        <th>Nơi giao</th>
                                        <th>Hình thức thanh toán</th>
                                        <th>Tổng thành tiền</th>
                                        <th>Tình trạng</th>
                                        <th>Chi tiết đơn hàng</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $arrStt = array(1, 2, 3, 4, 5, 6);
                                    $arrMa = array("100047", "100045", "100045", "100567", "100789", "100535");
                                    $arrTen = array("Trần Quốc Trọng", "Trần Quốc Trọng", "Trần Quốc Trọng", "Trần Kim Ngân", "Lê Anh Phi", "Đặng Kiến Phong	");
                                    $arrNgaylap = array("20/08/2021", "22/08/2021", "22/08/2021", "22/08/2021", "22/08/2021", "22/08/2021	");
                                    $arrNgaygiao = array("22/08/2021", "22/08/2021", "22/08/2021", "22/08/2021", "22/08/2021", "22/08/2021	");
                                    $arrNoigiao = array("Bình Chánh", "TPHCM", "Phú Yên", "TPHCM", "TPHCM", "TPHCM");
                                    $arrTien = array("₫142.000","₫142.000", "₫142.000", "₫142.000", "₫142.000", "₫142.000");
                                    for($i=0;$i<count($arrStt);$i++){
                                    echo ' <tr>';
                                    echo ' <td>' . $arrStt[$i] . '</td>';
                                    echo  ' <td>' . $arrMa[$i] . '</td>';
                                    echo ' <td>' . $arrTen[$i] . '</td>';
                                    echo ' <td>' . $arrNgaylap[$i] . '</td>';
                                    echo ' <td>' . $arrNgaygiao[$i] . '</td>';
                                    echo ' <td>' . $arrNoigiao[$i] . '</td>';
                                    if($arrStt[$i]==2||$arrStt[$i]==3){
                                    echo ' <td>' . "Tiền mặt" . '</td>';
                                    }
                                    else{
                                        echo ' <td>' . "Chuyển khoản" . '</td>';
                                    }
                                    echo ' <td>' . $arrTien[$i] . '</td>';
                                    if($arrStt[$i]==1||$arrStt[$i]==3){
                                    echo '<td><button type="button" class="btn btn-success btn-sm">Đã giao hàng</button></td>';
                                    }
                                    else{
                                        echo '<td><button type="button" class="btn btn-danger btn-sm">Chưa xử lý</button></td>';
                                    }
                                    echo ' <td><a href="quanlydonhangchitiet.php"><button type="button" class="btn btn-link">Xem</button></a></td>';
                                    echo '<td><a href="quanlydonhangedit.php"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                            <button type="button" class="btn btn-warning btn-sm"onclick="remove(this)">Xoá</button>
                                        </td>';
                                    echo '</tr>';
                                    }
                                    ?>
                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>


                </div>
                <?php include "layout/buttonbackpage.php"; ?>
            </div><!-- .animated -->
        </div><!-- .content -->

