<?php
include "../controller/checkoutcontroller.php";

?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Thanh Toán</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <form method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6> -->
                </div>
            </div>
            <div class="checkout__form">
                <h4>Thông Tin Đơn Hàng</h4>
                <form action="#">
                   
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ Tên<span>*</span></p>
                                        <input type="text" name="ten_user" required placeholder="Nhập tên của bạn"  value="<?php echo $_SESSION["user"]['ten_user']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ giao hàng<span>*</span></p>
                                <input type="text" name="dia_chi" placeholder="Nhập địa chỉ cần giao" class="checkout__input__add" required>
                            </div>
                            <!-- <div class="checkout__input">
                                <p>Tỉnh / Thành phố<span>*</span></p>
                                <input type="text">
                            </div> -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại <span>*</span></p>
                                        <input type="text" name="sdt" placeholder="Nhập số điện thoại liên lạc" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" required placeholder="Nhập email"  value="<?php echo $_SESSION["user"]['email']; ?>">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Ship to a different address?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <textarea rows="9" cols="100" name="ghichu" placeholder="Thêm ghi chú cho đơn hàng của bạn." required></textarea>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm<span>Tổng tiền</span></div>
                                <?php
                                $totalPriceAll = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    $totalPrice = $row['don_gia'] * $_SESSION['giohang'][$row['id_sp']];
                                    $totalPriceAll = $totalPriceAll + $totalPrice;
                                ?>
                                    <ul>

                                        <li name="id_sp"><?php echo $row['ten_sp'] ?> x<?php echo $_SESSION['giohang'][$row['id_sp']]; ?><span>Giá <?php  echo number_format($row['don_gia'], 0, '', '.')." VNĐ"; ?><?php echo number_format( $totalPrice, 0, '', '.')." VNĐ"; ?></span></li>
                                        
                                    </ul>
                                <?php
                                }
                                ?>
                                <div class="checkout__order__subtotal">Tổng tiền tạm tính <span><?php echo number_format( $totalPriceAll, 0, '', '.')." VNĐ";?></span></div>
                                <div class="checkout__order__total">Tổng tiền <span><?php echo number_format( $totalPriceAll, 0, '', '.')." VNĐ";?></span></div>

                                <!-- <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p> -->
                                <h4>Phương thức thanh toán</h4>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Thu tiền khi giao hàng
                                        <input type="radio" id="payment" name="rad_phuongthuc" value="COD" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Chuyển khoản ngân hàng
                                        <input type="radio" id="paypal" name="rad_phuongthuc" value="Banking">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" name="submit" class="site-btn">Xác nhận đơn hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </form>
</section>
<!-- Checkout Section End -->