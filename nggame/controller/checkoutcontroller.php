<?php
if (isset($_SESSION['giohang'])) {
    $arrId = array();
    foreach ($_SESSION['giohang'] as $id_sp => $so_luong) {
        $arrId[] = $id_sp;
    }
    $strId = implode(',', $arrId);
    $sql = "SELECT * FROM sanpham WHERE id_sp IN($strId) ORDER BY id_sp DESC";
    $query = mysqli_query($conn, $sql);
}
?>
<?php
function tongtien($query){
    $totalPriceAll1 = 0;
    while ($row1 = mysqli_fetch_array($query)) {
    $totalPrice1 = $row1['don_gia'] * $_SESSION['giohang'][$row1['id_sp']];
    $totalPriceAll1 = $totalPriceAll1 + $totalPrice1;
    }
return $totalPriceAll1;
}

?>
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    //$id_sp = $_POST['id_sp'];
    $ten_user = $_POST['ten_user'];
    $dia_chi = $_POST['dia_chi'];
    $so_dien_thoai = $_POST['sdt'];
    $email = $_POST['email'];
    $ghi_chu = $_POST['ghichu'];
    $rad_phuongthuc = $_POST['rad_phuongthuc'];
    $trang_thai = "Nhận đơn hàng";
    $id_user = $_SESSION["user"]['id_user'];
    // if(isset($_POST['id_user'])){
    //     $id_user = $_POST['id_user'];
    // } else {
        // $sql_tinhsoluonguser = "SELECT COUNT(id_user) FROM `users`;";
        // $query_tinhsoluonguser = mysqli_query($conn, $sql_tinhsoluonguser);
        // $id_user = $query_tinhsoluonguser + 1;
    // }
    $strBody = '';
    // Thông tin Khách hàng
    $strBody = '<p>
    <b>Khách hàng:</b> '.$ten_user.'<br />
    <b>Email:</b> '.$email.'<br />
    <b>Điện thoại:</b> '.$so_dien_thoai.'<br />
    <b>Địa chỉ:</b> '.$dia_chi.'
    </p>';
    // Danh sách Sản phẩm đã mua
    $strBody .= ' <table border="1px" cellpadding="10px" cellspacing="1px"
    width="100%">
    <tr>
    <td align="center" bgcolor="#3F3F3F" colspan="4"><font
    color="white"><b>XÁC NHẬN HÓA ĐƠN THANH TOÁN</b></font></td>
    </tr>
    <tr id="invoice-bar">
    <td width="45%"><b>Tên Sản phẩm</b></td>
    <td width="20%"><b>Giá</b></td>
    <td width="15%"><b>Số lượng</b></td>
    <td width="20%"><b>Thành tiền</b></td>
    </tr>';
    $totalPriceAll = 0;
    while($row5 = mysqli_fetch_array($query)){
    $totalPrice = $row5['don_gia']*$_SESSION['giohang'][$row5['id_sp']];
    $strBody .= '<tr>
    <td class="prd-name">'.$row5['ten_sp'].'</td>
    <td class="prd-price"><font color="#C40000">'.$row5['don_gia'].'
    VNĐ</font></td>
    <td class="prd-number">'.$_SESSION['giohang'][$row5['id_sp']].'</td>
    <td class="prd-total"><font color="#C40000">'.$totalPrice.'
    VNĐ</font></td>
    </tr>';
    $totalPriceAll += $totalPrice;
    }
    $strBody .= '<tr>
    <td class="prd-name">Tổng giá trị hóa đơn là:</td>
    <td colspan="2"></td>
    <td class="prd-total"><b><font color="#C40000">'.$totalPriceAll.'
    VNĐ</font></b></td>
    </tr>
    </table>';
    $strBody .= '<p align="justify">
    <b>Quý khách đã đặt hàng thành công!</b><br />
    • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần
    Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br
    />
    • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước
    khi giao hàng 24 tiếng.<br />
    <b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng
    Tôi!</b>
    </p>';
       $mail = new PHPMailer(true);

            try {
              //Server settings
              $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
              $mail->isSMTP(); // gửi mail SMTP
              $mail->Host = "ssl://smtp.gmail.com";  // Set the SMTP server to send through

              $mail->SMTPAuth = true; // Enable SMTP authentication
              $mail->Username = 'phamtienlong135@gmail.com'; // SMTP username
              $mail->Password = 'Dante135'; // SMTP password
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
              $mail->Port = 465; // TCP port to connect to
              //Recipients
              $mail->CharSet = 'UTF-8';
              $mail->setFrom("phamtienlong135@gmail.com", "Admin");
              $mail->addAddress("phamtienlong135@gmail.com", "Admin"); // Add a recipient
              // $mail->addAddress('ellen@example.com'); // Name is optional
              $mail->addReplyTo('phamtienlong135@gmail.com', 'Information');
              $mail->addCC("phamtienlong135@gmail.com");
              // $mail->addBCC('');
              // Attachments
              // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
              // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
              // Content
              $mail->WordWrap = 500;
              $mail->isHTML(true);   // Set email format to HTML
              $mail->Subject =  " đã đăng ký Phòng có mã "  ;
              $mail->Body =   $strBody;
              // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
              $mail->send();
            } catch (Exception $e) {
              echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
   
    $don_gia =tongtien($query);

      
    
    
    //Tiến hàng thêm Đơn hàng
    if (isset($id_user) && isset($ten_user) && isset($dia_chi) && isset($so_dien_thoai) && isset($email) && isset($don_gia)) {
        $sql = "INSERT INTO `donhang`(`id_user`, `ten_user`, `dia_chi`, `so_dien_thoai`, `email`, `thanh_tien`,`ghi_chu`, `phuong_thuc_thanh_toan`,`trang_thai`)
        VALUES('$id_user','$ten_user','$dia_chi','$so_dien_thoai','$email','$don_gia','$ghi_chu','$rad_phuongthuc','$trang_thai')";
        $query_themdon = mysqli_query($conn, $sql);
        if ($query_themdon) {
            echo "Thêm Đơn hàng thành công <br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        //Thêm chi tiết đơn hàng
        if($query_themdon){
            $id_don_hang = mysqli_insert_id($conn);
            foreach ($_SESSION['giohang'] as $id_sp => $so_luong) {
                $sql_dongia = "SELECT * FROM sanpham WHERE id_sp = $id_sp";
                $query_dongia = mysqli_query($conn, $sql_dongia);
                $result = mysqli_fetch_assoc($query_dongia);
                //echo $result["don_gia"];
                $dongia_sanpham = $result["don_gia"];
                $sql_chitiet = "INSERT INTO `chitietdonhang`(`id_don_hang`, `id_sp`, `so_luong`, `don_gia`)
                VALUES('$id_don_hang','$id_sp','$so_luong','$dongia_sanpham')"; 
                $query_chitiet = mysqli_query($conn, $sql_chitiet);
            if ($query_chitiet) {
                            echo "Thêm chi tiết đơn thành công";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
            }
           unset($_SESSION['giohang']);
           header('location:../view/index.php');
        }


    }
   
}

?>