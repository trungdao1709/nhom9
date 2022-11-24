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
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Cart</span>
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
                            <th class="product-thumbnail">Image</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                            <th class="product-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['mycart'] as $key => $cart) : ?>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="assets/images/product/<?php echo $cart[2] ?>" alt="cart-image"></a>
                                </td>
                                <td class="product-name"><a href="#"><?php echo $cart[3] ?></a></td>
                                <td class="product-price"><span class="amount"><?php echo $cart[4] ?></span></td>
                                <td class="product-quantity"><input type="number" value="<?php echo $cart[5] ?>"></td>
                                <td class="product-subtotal"><?php echo $cart[6] ?></td>
                                <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td class="product-thumbnail">
                                <a href="#"><img src="assets/images/product/2.webp" alt="cart-image"></a>
                            </td>
                            <td class="product-name"><a href="#">Carte Postal Clock</a></td>
                            <td class="product-price"><span class="amount">£50.00</span></td>
                            <td class="product-quantity"><input type="number" value="1"></td>
                            <td class="product-subtotal">£50.00</td>
                            <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Table Content Start -->
            <div class="row">
                <!-- Cart Button Start -->
                <div class="col-md-8 col-sm-7">
                    <div class="buttons-cart">
                        <a href="shop.php">Continue Shopping</a>
                    </div>
                </div>
                <!-- Cart Button Start -->
                <!-- Cart Totals Start -->
                <div class="col-md-4 col-sm-5">
                    <div class="cart_totals">
                        <h2>Cart Totals</h2>
                        <br>
                        <table>
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="amount">$215.00</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td>
                                        <strong><span class="amount">$215.00</span></strong>
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