

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Quản lý danh mục</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Quản lý danh mục</a></li>
                                <li class="active">Hiển thị</li>
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
                            <strong class="card-title">Danh mục</strong>&nbsp;
                        </div>
                        <div class="card-body">
                            <a href="quantri.php?page_layout=quanlydanhmucsanphamadd"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã danh mục</th>
                                        <th>Tên danh mục</th>
                                      
                                        <th>Chi tiết danh mục</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        $arrMa = array("100047", "100045", "100045");
                                        $arrTen = array("Trần Quốc Trọng", "Lê Thị Kim Ngân", "Lê Anh Phi");
                                        
                                    
                                    
                                        for($i=0;$i<count($arrMa);$i++){
                                        echo ' <tr>';
                                        echo  ' <td>' . $arrMa[$i] . '</td>';
                                        echo ' <td>' . $arrTen[$i] . '</td>';
                                        
                                      
                                    
                                    
                                        echo ' <td><a href="quantri.php?page_layout=quanlydanhmucchitiet"><button type="button" class="btn btn-link">Xem</button></a></td>';
                                        echo '<td><a href="quantri.php?page_layout=quanlydanhmucsanphamedit"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
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
