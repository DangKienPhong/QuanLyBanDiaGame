<?php
        if(isset($_SESSION['giohang'])){
            if(isset($_POST['sl'])){
                foreach($_POST['sl'] as $id_sp=>$sl){
                    if($sl==0){
                        unset($_SESSION['giohang'][$id_sp]);
                    }
                    else if($sl>0){
                        $_SESSION['giohang'][$id_sp]=$sl;
                    }
                }
            }
            $arrId=array();
            foreach($_SESSION['giohang'] as $id_sp=>$so_luong){
                $arrId[]=$id_sp;
            }
            $strId=implode(',',$arrId);
            $sql="SELECT * FROM sanpham WHERE id_sp IN($strId) ORDER BY id_sp DESC";
            $query = mysqli_query($conn,$sql);
        }
        else{
        
            echo'<h1 style="text-align: center;"> Không có sản phẩm nào</h1>';
        }
     
 
?>