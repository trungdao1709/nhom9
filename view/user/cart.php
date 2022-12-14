<?php

// session_destroy();
include "inc/header.php";
// var_dump($_SESSION['cart']);
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    // print_r($cart) ;
    // var_dump($_SESSION['cart']);
} else {
    echo 'chuwa co gio hang';
}
?>

<!-- top breadcrumb -->
<div class="top_breadcrumb">
    <div class="breadcrumb_container ">
        <div class="container">
            <nav data-depth="3" class="breadcrumb">
                <ol>
                    <li>
                        <a href="#">
                            <span>Nhà </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Cửa hàng</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->

<!-- cart page content -->
<div class="cart-page-area">
    <div class="container">
        <!-- Form Start -->
        <form action="#">
            <!-- Table Content Start -->
            <div class="table-content table-responsive mb-50">
                <table>
                    <thead>
                        <tr>
                            <th class="product-thumbnail">Hình ảnh</th>
                            <th class="product-name">Sản phẩm</th>
                            <th class="product-price">Giá bán</th>
                            <th class="product-quantity">Số lượng</th>
                            <th class="product-subtotal">Tổng cộng</th>
                            <th class="product-remove">Loại bỏ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $tong = 0;
                            foreach ($cart as $value => $items) {
                                $tt = $items['gia'] * $items['so_luong'];
                                $tong += $tt;
                                $xoasp = '<a onclick="return confirm("Bạn có chắc muốn xóa ??")" href="./controller/cart/delete_cart.php?id=' . $items['id'] . '">
                                         <button>Xoa</button></a>';
                                echo '
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/images/product/' . $items['image'] . '" alt="cart-image"></a>
                                    </td>
                                    <td class="product-name"><a href="#">' . $items['name'] . '</a></td>
                                    <td class="product-price"><span class="amount">' . $items['gia'] . '</span></td>
                                    <td class="product-quantity"><input type="number" value="' . $items['so_luong'] . '"></td>
                                    <td class="product-subtotal">$' . $tt . '</td>
                                    <td class="product-remove">
                                        <a onclick="return confirm("Bạn có chắc muốn xóa ??")" href="controller/cart/delete_cart.php?id=' . $value . '">
                                            Xoa
                                        </a>
                                    </td>
                                </tr>';
                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Table Content Start -->
            <div class="row">
                <!-- Cart Button Start -->
                <div class="col-md-8 col-sm-7">
                    <div class="buttons-cart">
                        <input type="submit" value="Cập nhật giỏ hàng">
                        <a href="shop.php">Tiếp tục mua sắm</a>
                    </div>
                </div>
                <!-- Cart Button Start -->
                <!-- Cart Totals Start -->
                <div class="col-md-4 col-sm-5">
                    <div class="cart_totals">
                        <h2>Tổng số giỏ hàng</h2>
                        <br>
                        <table>
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Tổng phụ</th>
                                    <td><span class="amount">$<?php echo $tong ?></span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Tộng cộng</th>
                                    <td>
                                        <strong><span class="amount">$<?php echo $tong ?></span></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="wc-proceed-to-checkout">
                            <a href="checkout.php">Thanh toán</a>
                        </div>
                    </div>
                </div>
                <!-- Cart Totals End -->
            </div>
            <!-- Row End -->
        </form>
        <!-- Form End -->
    </div>
</div>
<!-- cart page content end -->
<?php
include 'inc/footer.php';
?>