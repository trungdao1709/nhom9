<?php
include "inc/header.php";
?>
<!-- top breadcrumb -->
<div class="top_breadcrumb">
    <div class="breadcrumb_container ">
        <div class="container">
            <nav data-depth="3" class="breadcrumb">
                <ol>
                    <li>
                        <a href="#">
                            <span>Nhà</span>

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Thủ tục thanh toán</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->

<!-- checkout page content -->
<div class="checkout-page-area">

    <!-- coupon area -->
    <div class="coupon-area">
        <div class="container">
            <div class="coupon-accordion">
                <!-- ACCORDION START -->
                <h3>Phản hồi khách hàng?<span id="showlogin">Nhấn vào đây để đăng nhập</span></h3>
                <div id="checkout-login" class="coupon-content">
                    <div class="coupon-info">
                        <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                        <form action="#">
                            <p class="form-row-first">
                                <label>Tên tài khoản or email <span class="required">*</span></label>
                                <input type="text">
                            </p>
                            <p class="form-row-last">
                                <label>Mật khẩu <span class="required">*</span></label>
                                <input type="text">
                            </p>
                            <p class="form-row">
                                <input type="submit" value="Login">
                                <label>
                                    <input type="checkbox">
                                    Nhớ tài khoản
                                </label>
                            </p>
                            <p class="lost-password">
                                <a href="#">Quên mật khẩu</a>
                            </p>
                        </form>
                    </div>
                </div>
                <!-- ACCORDION END -->
                <!-- ACCORDION START -->
                <h3>Có phiếu giảm giá? <span id="showcoupon">Nhấn vào đây để dùng phiếu giảm giá</span></h3>
                <div id="checkout_coupon" class="coupon-checkout-content">
                    <div class="coupon-info">
                        <form action="#">
                            <p class="checkout-coupon">
                                <input type="text" class="code" placeholder="Coupon code">
                                <input type="submit" value="Apply Coupon">
                            </p>
                        </form>
                    </div>
                </div>
                <!-- ACCORDION END -->
            </div>
        </div>
    </div>
    <!-- coupon area end -->

    <!-- checkout area -->
    <div class="checkout-area">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkbox-form">
                            <h3>Chi tiết thanh toán</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select mb-30">
                                        <label>Quốc gia <span class="required">*</span></label>
                                        <select>
                                            <option value="volvo">Bangladesh</option>
                                            <option value="saab">Algeria</option>
                                            <option value="mercedes">Afghanistan</option>
                                            <option value="audi">VietNam</option>
                                            <option value="audi2">Albania</option>
                                            <option value="audi3">Bahrain</option>
                                            <option value="audi4">Colombia</option>
                                            <option value="audi5">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Họ <span class="required">*</span></label>
                                        <input type="text" placeholder="Họ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Tên <span class="required">*</span></label>
                                        <input type="text" placeholder="Tên">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Tên công ty</label>
                                        <input type="text" placeholder="Tên công ty">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ nhà <span class="required">*</span></label>
                                        <input type="text" placeholder="địa chỉ đường phố">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mtb-30">
                                        <input type="text" placeholder="Căn hộ, dãy phòng, đơn vị, v.v. (tùy chọn)">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Thị trấn / Thành phố<span class="required">*</span></label>
                                        <input type="text" placeholder="TThị trấn / Thành phố">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Tiểu bang / Quận<span class="required">*</span></label>
                                        <input type="text" placeholder="Tiểu bang / Quận">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Mã bưu / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Mã bưu / Zip">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Địa chỉ email <span class="required">*</span></label>
                                        <input type="email" placeholder="Địa chỉ email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Điện thoại <span class="required">*</span></label>
                                        <input type="text" placeholder="Điện thoại">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc mb-30">
                                        <input id="cbox" type="checkbox">
                                        <label>Tạo một tài khoản?</label>
                                    </div>
                                    <div id="cbox_info" class="checkout-form-list create-accounts mb-25">
                                        <p class="mb-10">Tạo một tài khoản bằng cách nhập các thông tin dưới đây. Nếu bạn là khách hàng cũ, vui lòng đăng nhập ở đầu trang.</p>
                                        <label>mật khẩu tài khoản <span class="required">*</span></label>
                                        <input type="password" placeholder="mật khẩu">
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Vận chuyển đến một địa chỉ khác?</label>
                                        <input id="ship-box" type="checkbox">
                                    </h3>
                                </div>
                                <div id="ship-box-info" class="row">
                                    <div class="col-md-12">
                                        <div class="country-select mb-30">
                                            <label>Quốc gia <span class="required">*</span></label>
                                            <select>
                                                <option value="volvo">Bangladesh</option>
                                                <option value="saab">Algeria</option>
                                                <option value="mercedes">Afghanistan</option>
                                                <option value="audi">VietNam</option>
                                                <option value="audi2">Albania</option>
                                                <option value="audi3">Bahrain</option>
                                                <option value="audi4">Colombia</option>
                                                <option value="audi5">Dominican Republic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Họ <span class="required">*</span></label>
                                            <input type="text" placeholder="Họ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Tên <span class="required">*</span></label>
                                            <input type="text" placeholder="Tên">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Tên công ty</label>
                                            <input type="text" placeholder="Tên công ty">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ nhà <span class="required">*</span></label>
                                            <input type="text" placeholder="địa chỉ đường phố">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mtb-30">
                                            <input type="text" placeholder="Căn hộ, dãy phòng, đơn vị, v.v. (tùy chọn)">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Thị trấn / Thành phố<span class="required">*</span></label>
                                            <input type="text" placeholder="TThị trấn / Thành phố">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Tiểu bang / Quận<span class="required">*</span></label>
                                            <input type="text" placeholder="Tiểu bang / Quận">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Mã bưu / Zip <span class="required">*</span></label>
                                            <input type="text" placeholder="Mã bưu / Zip">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Ghi chú đặt hàng</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt cho giao hàng."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="your-order">
                            <h3>đơn đặt hàng của bạn</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-total">Tổng cộng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Chiếm <strong class="product-quantity"> × 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$165.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                 <strong class="product-quantity"> × 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$50.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Tổng phụ giỏ hàng</th>
                                            <td><span class="amount">$215.00</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng số đơn đặt hàng</th>
                                            <td><strong><span class="amount">£215.00</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                       Chuyển khoản thực tiếp
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <p>Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền trong tài khoản của chúng tôi được thanh toán.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Thanh toán séc
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <p>Vui lòng gửi séc của bạn đến Tên cửa hàng, Phố cửa hàng, Thị trấn cửa hàng, Bang / Hạt cửa hàng, Mã bưu điện cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        PayPal
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <p>Thanh toán qua PayPal; bạn có thể thanh toán bằng thẻ tín dụng nếu bạn không có tài khoản PayPal.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment">
                                        <input type="submit" value="đặt hàng">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- checkout area end -->

</div>
<?php
include 'inc/footer.php';
?>