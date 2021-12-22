
<?php
include_once '../controller/baivietcontroller.php';
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
                                <strong class="card-title">Danh sách bài viết</strong>&nbsp;
                            </div>
                            <div class="card-body">
                            <a href="quantri.php?page_layout=quanlybaivietadd"><button type="button" class="btn btn-primary btn-sm" style="float:right;">Thêm</button></a>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Mã bài viết</th>
                                            <th>Tên bài viết</th>
                                            <th>Tác giả</th>
                                           
                                         
                                            <th>Thời gian</th>                                          
                                            <th>Chi tiết bài viết</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($query))
                                       {
                                           ?>
                                        <td> <?php echo $row['id_bv']?></td>
                                
                                        <td> <?php echo $row['ten_bv']?></td>
                                        <td> <?php echo $row['tac_gia']?></td>
                                     
                                        <td> <?php echo $row['ngay_tao']?></td>
                               
                                       <td><a href="quantri.php?page_layout=quanlybaivietchitiet&id_bv=<?php echo $row['id_bv'];?>"><button type="button" class="btn btn-link">Xem</button></a></td>
                                        <td><a href="quantri.php?page_layout=quanlybaivietedit&id_bv=<?php echo $row['id_bv'];?>"><button type="button" class="btn btn-secondary btn-sm">Sửa</button></a>
                                        <a href="../controller/baivietremovecontroller.php?id_bv=<?php echo $row['id_bv'];?>">    <button type="button" class="btn btn-warning btn-sm"onclick="remove(this)">Xoá</button></a>
                                            </td>
                                       </tr>
                                        <?php
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
