<?php
    //xét và nhận biến $_GET['page']
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page=1;

}
$rowsPerPage=2;
$perRow=$page*$rowsPerPage-$rowsPerPage;
    
$sql_bv="SELECT * FROM baiviet INNER JOIN hinhanhbv on baiviet.id_bv = hinhanhbv.id_bv WHERE hinhanhbv.ten_hinhanh LIKE '%bia%' LIMIT $perRow, $rowsPerPage";
$query_bv=mysqli_query($conn,$sql_bv); 

//tổng số bản ghi
$totalRows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM baiviet"));

//tổng số trang (Nếu không chia hết thì làm tròn lên bằng ceil)
$totalPages=ceil($totalRows/$rowsPerPage);

//Xây dựng phân trang
$listpage="";
for ($i=1; $i <= $totalPages ; $i++) { 
    if($page == $i){
       $listpage.='<a class="active" href="index.php?page_layout=blog&page='.$i.'">'.$i.'</a>'; 
    }
    else{
        $listpage.='<a href="index.php?page_layout=blog&page='.$i.'">'.$i.'</a>';
    }
}
?>