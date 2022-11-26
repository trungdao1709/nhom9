<?php
include 'inc/header.php';
include "model/config.php";
$query = "select * from hang";
$hang = getAll($query);

?>

<!-- top breadcrumb -->
<div class="top_breadcrumb">
    <div class="breadcrumb_container ">
        <div class="container">
            <nav data-depth="3" class="breadcrumb">
                <ol>
                    <li><a href="#"><span>Home</span></a></li>
                    <li><a href="#"><span>Fashion </span></a>
                    </li>
                    <li><a href="#"><span>Shop</span></a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->

<!-- Shop page wraper -->
<div class="shop-page-wraper">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9 shop-content">
                <div class="product-toolbar">
                    <div class="topbar-title">
                        <h1>Arts & Crafts</h1>
                    </div>
                    <div class="product-toolbar-inner">
                        <div class="product-view-mode">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-bs-toggle="tab" href="#grid"><i class="ion-grid"></i></a></li>
                                <li><a data-bs-toggle="tab" href="#list"><i class="ion-navicon"></i></a></li>
                            </ul>
                        </div>
                        <div class="woocommerce-ordering">
                            <form method="get" class="woocommerce-ordering hidden-xs">
                                <div class="orderby-wrapper">
                                    <label>Sort By :</label>
                                    <select class="nice-select-menu orderby">
                                        <option dara-display="Select">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="shop-page-product-area tab-content">
                        <div id="grid" class="tab-pane fade show active">
                            <div class="row">
                                <!-- single product -->
                                <?php foreach ($hang as $key => $value) : ?>
                                    <form action="../user/controller/cart/add_cart.php" method="POST">
                                        <div class="col-sm-6 col-md-6 col-lg-4">
                                            <div class="product-miniature js-product-miniature">
                                                <div class="img_block">
                                                    <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
                                                    <input type="hidden" name="image" value="<?php echo $value["hinh_anh"] ?>">
                                                    <input type="hidden" name="name" value="<?php echo $value["ten_hang"] ?>">
                                                    <input type="hidden" name="gia" value="<?php echo $value["gia"] ?>">
                                                    <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="thumbnail product-thumbnail">
                                                        <img src="assets/images/product/<?php echo $value['hinh_anh'] ?>" alt="harosa product">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h1> <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="product_name" title="Hummingbird printed t-shirt"><?php echo $value["ten_hang"] ?></a></h1>
                                                    <div class="product-price-and-shipping">
                                                        <span class="price price-sale">$<?php echo $value["gia"] ?></span>
                                                    </div>
                                                    <div class="cart">
                                                        <div class="product-add-to-cart">
                                                            <a><button type='submit' name="addcart">Add to cart</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php endforeach ?>
                                <!-- single product end -->
                                
                            </div>
                        </div>

                        <div id="list" class="tab-pane fade">
                            <div class="row">
                                <!-- single product list view -->
                                <div class="col-md-12">
                                    <div class="product-miniature js-product-miniature">
                                        <div class="img_block">
                                            <a href="single-product.html" class="thumbnail product-thumbnail">
                                                <img src="assets/images/product/1.webp" alt="harosa product">
                                            </a>
                                            <ul class="product-flag">
                                                <li class="new"><span>New</span></li>
                                            </ul>
                                            <div class="quick-view">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_desc">
                                            <div class="manufacturer">
                                                <a href="shop.html">Studio Design</a>
                                            </div>
                                            <h1><a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                            <div class="product-desc">
                                                <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                            </div>
                                            <div class="product-price-and-shipping">
                                                <span class="regular-price">$23.90</span>
                                                <span class="price price-sale">$21.99</span>
                                            </div>
                                            <div class="cart">
                                                <div class="product-add-to-cart">
                                                    <a href="cart.html">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product list view end -->
                                <!-- single product list view -->
                                <div class="col-md-12">
                                    <div class="product-miniature js-product-miniature">
                                        <div class="img_block">
                                            <a href="single-product.html" class="thumbnail product-thumbnail">
                                                <img src="assets/images/product/2.webp" alt="harosa product">
                                            </a>
                                            <div class="quick-view">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                            </div>
                                            <div class="hook-reviews">
                                                <div class="comments_note">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_desc">
                                            <div class="manufacturer">
                                                <a href="shop.html">Studio Design</a>
                                            </div>
                                            <h1><a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                            <div class="product-desc">
                                                <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                            </div>
                                            <div class="product-price-and-shipping">
                                                <span class="regular-price">$23.90</span>
                                                <span class="price price-sale">$21.99</span>
                                            </div>
                                            <div class="cart">
                                                <div class="product-add-to-cart">
                                                    <a href="cart.html">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product list view end -->
                                <!-- single product list view -->
                                <div class="col-md-12">
                                    <div class="product-miniature js-product-miniature">
                                        <div class="img_block">
                                            <a href="single-product.html" class="thumbnail product-thumbnail">
                                                <img src="assets/images/product/3.webp" alt="harosa product">
                                            </a>
                                            <div class="quick-view">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_desc">
                                            <div class="manufacturer">
                                                <a href="shop.html">Studio Design</a>
                                            </div>
                                            <h1><a href="single-product.html" class="product_name" title="Hummingbird printed t-shirt">Hummingbird printed t-shirt</a></h1>
                                            <div class="product-desc">
                                                <p><span>Regular fit, round neckline, short sleeves. Made of extra long staple pima cotton. </span></p>
                                            </div>
                                            <div class="product-price-and-shipping">
                                                <span class="regular-price">$23.90</span>
                                                <span class="price price-sale">$21.99</span>
                                            </div>
                                            <div class="cart">
                                                <div class="product-add-to-cart">
                                                    <a href="cart.html">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product list view end -->

                            </div>
                        </div>
                    </div>
                </div>
                <nav class="woocommerce-pagination">
                    <ul class="page-numbers">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="page-numbers" href="#">4</a></li>
                        <li><a class="next page-numbers" href="#">→</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 sidebar-shop">
                <div class="sidebar-product-categori">
                    <div class="shop-categori-title">
                        <h3>Arts & Crafts</h3>
                    </div>
                    <div class="product-filter mb-30">
                        <div class="widget-title">
                            <h3>Filter by price</h3>
                        </div>
                        <div class="widget-content">
                            <div id="price-range"></div>
                            <div class="price-values">
                                <div class="price_text_btn">
                                    <span>Price:</span>
                                    <input type="text" class="price-amount">
                                </div>
                                <button class="button" type="submit">Filter</button>
                            </div>
                        </div>
                    </div>

                    <div class="advertising">
                        <a href="shop.html"><img src="assets/images/banner/advertising.webp" alt="harosa images"></a>
                    </div>
                    <div class="shop-categori-page categori-mini-product-area">
                        <div class="pos-featured-products  product_block_container">
                            <div class="pos_title">
                                <h2>New products</h2>
                            </div>
                        </div>
                        <div class=" pos_content row">
                            <div class="feature-item owl-carousel">
                                <div class="item-product">
                                    <!-- mini product -->
                                    <div class="product-miniature js-product-miniature">
                                        <div class="img_block">
                                            <a href="#" class="thumbnail product-thumbnail">
                                                <img src="assets/images/product/mini/1.webp" alt="">
                                            </a>
                                        </div>
                                        <div class="product_desc">
                                            <div class="manufacturer">
                                                <a href="#">Graphic Corner</a>
                                            </div>
                                            <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                            <div class="product-price-and-shipping">
                                                <span class="price ">$9.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- mini product end -->
                                    <!-- mini product -->
                                    <div class="product-miniature js-product-miniature">
                                        <div class="img_block">
                                            <a href="#" class="thumbnail product-thumbnail">
                                                <img src="assets/images/product/mini/2.webp" alt="">
                                            </a>
                                        </div>
                                        <div class="product_desc">
                                            <div class="manufacturer">
                                                <a href="#">Graphic Corner</a>
                                            </div>
                                            <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                            <div class="product-price-and-shipping">
                                                <span class="price ">$9.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- mini product end -->
                                    <!-- mini product -->
                                    <div class="product-miniature js-product-miniature">
                                        <div class="img_block">
                                            <a href="#" class="thumbnail product-thumbnail">
                                                <img src="assets/images/product/mini/3.webp" alt="">
                                            </a>
                                        </div>
                                        <div class="product_desc">
                                            <div class="manufacturer">
                                                <a href="#">Graphic Corner</a>
                                            </div>
                                            <h1><a href="single-product.html">Mountain fox - Vector graphics</a></h1>
                                            <div class="product-price-and-shipping">
                                                <span class="price ">$9.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- mini product end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop page wraper end -->




<?php
include 'inc/footer.php'
?>