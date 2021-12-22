<?php
//xét và nhận biến $_GET['page']
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page=1;

}
$rowsPerPage=6;
$perRow=$page*$rowsPerPage-$rowsPerPage;
$sqlsp="SELECT * FROM sanpham LIMIT $perRow, $rowsPerPage"; 
$querysp=mysqli_query($conn,$sqlsp);

//tổng số bản ghi
$totalRows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM sanpham"));

//tổng số trang (Nếu không chia hết thì làm tròn lên bằng ceil)
$totalPages=ceil($totalRows/$rowsPerPage);

//Xây dựng phân trang
$listpage="";
for ($i=1; $i <= $totalPages ; $i++) { 
    if($page == $i){
       $listpage.='<a class="active" href="index.php?page_layout=shop-grid&page='.$i.'">'.$i.'</a>'; 
    }
    else{
        $listpage.='<a href="index.php?page_layout=shop-grid&page='.$i.'">'.$i.'</a>';
    }
}
?>