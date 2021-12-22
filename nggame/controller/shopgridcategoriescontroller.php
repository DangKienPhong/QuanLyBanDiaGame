<?php
$id_dm_sp=$_GET["id_dm_sp"];
$sqldm="SELECT * FROM danhmucsp WHERE id_dm_sp=$id_dm_sp";
$querydm=mysqli_query($conn,$sqldm); 
$rowdm=mysqli_fetch_array($querydm);

//xét và nhận biến $_GET['page']
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page=1;

}
$rowsPerPage=6;
$perRow=$page*$rowsPerPage-$rowsPerPage;

$sqlsp="SELECT * FROM sanpham WHERE id_danhmuc=$id_dm_sp ORDER BY id_sp DESC LIMIT $perRow, $rowsPerPage"; 
$querysp=mysqli_query($conn,$sqlsp);

//tổng số bản ghi
$totalRows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM sanpham WHERE id_danhmuc=$id_dm_sp"));

//tổng số trang (Nếu không chia hết thì làm tròn lên bằng ceil)
$totalPages=ceil($totalRows/$rowsPerPage);

//Xây dựng phân trang
$listpage="";
for ($i=1; $i <= $totalPages ; $i++) { 
    if($page == $i){
       $listpage.='<a class="active" href="index.php?page_layout=shop-gridcategories&id_dm_sp='.$id_dm_sp.'&page='.$i.'">'.$i.'</a>'; 
    }
    else{
        $listpage.='<a href="index.php?page_layout=shop-gridcategories&id_dm_sp='.$id_dm_sp.'&page='.$i.'">'.$i.'</a>';
    }
}
?>