<?php
include 'inc/header.php';
include './model/config.php';
$query = "select * from hang";
$hang = getAll($query);
?>



<div class="offcanvas offcanvas-start" id="offcanvasMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Offcanvas</h5>
        <button class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">

        <div class="contact-link">
            <div class="info_box phone">
                Call us : <span>(012) 800 456 789</span>
            </div>
            <div class="info_box email">
                email : <a href="mailto:demo@example.com">demo@example.com</a>
            </div>
        </div>

        <div class="offcanvas-accordion accordion" id="accordionExample">
            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"><i class="first-icon fa fa-user-circle"></i> My Account</button>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <ul class="offcanvas-meta">
                        <li><a href="login.html">My Account</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="register.html">Sign in</a></li>
                    </ul>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">$ USD</button>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <ul class="offcanvas-meta">
                        <li><a href="#">$ USD</a></li>
                        <li><a href="#">€ EUR</a></li>
                    </ul>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"><img src="assets/images/icons/en.webp" alt="language-selector">English</button>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <ul class="offcanvas-meta">
                        <li>
                            <a href="#">
                                <img src="assets/images/icons/en.webp" alt="French">
                                <span>English</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/images/icons/fr.webp" alt="French">
                                <span>French</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="canvas-menu">
            <ul>
                <li class="current"><a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home Shop 1</a></li>
                        <li><a href="index-2.html">Home Shop 2</a></li>
                        <li><a href="index-3.html">Home Shop 3</a></li>
                        <li><a href="index-4.html">Home Shop 4</a></li>
                        <li><a href="index-5.html">Home Shop 5</a></li>
                        <li><a href="index-6.html">Home Shop 6</a></li>
                    </ul>
                </li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="contact-us.html">Contact</a></li>
                <li><a href="#">Features </a>
                    <ul class="mega-sub-menu">
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="faq.html">Frequently Questins</a></li>
                                <li><a href="404.html">Error 404</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                <li><a href="blog.html">Sidebar right</a></li>
                                <li><a href="single-blog.html">Image Format</a></li>
                                <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                <li><a href="single-blog-audio.html">Audio Format</a></li>
                                <li><a href="single-blog-video.html">Video Format</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-list.html">Shop List View</a></li>
                                <li><a href="shop-right.html">Shop Right</a></li>
                                <li><a href="single-product.html">Shop Single</a></li>
                                <li><a href="cart.html">Shoping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="social_follow">
            <ul>
                <li class="facebook"><a href="#"></a></li>
                <li class="twitter"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="instagram"><a href="#"></a></li>
            </ul>
        </div>

    </div>
</div>
<!-- offcanvas END -->
<!-- Slider area -->
<div class="slider-area home-three">
    <!-- slider start -->
    <div class="slider-inner">
        <div id="mainSlider" class="nivoSlider nevo-slider">
            <img src="assets/images/slider/4.webp" alt="main slider" title="#htmlcaption1" />
            <img src="assets/images/slider/3.webp" alt="main slider" title="#htmlcaption2" />
        </div>
        <div id="htmlcaption1" class="nivo-html-caption slider-caption">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="slider-content slider-content-1 slider-animated-1 pull-left">
                    <p class="hp1">Pore Cleansing Refreshing</p>
                    <h1 class="hone">up to 20% off</h1>
                    <h2 class="htwo">Cleansing Gel</h2>
                    <div class="button-1 hover-btn-2">
                        <a href="#">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="htmlcaption2" class="nivo-html-caption slider-caption">
            <div class="slider-progress"></div>
            <div class="container">
                <div class="slider-content slider-content-2 slider-animated-2 pull-left">
                    <p class="hp1">Soothing Iritated Skin</p>
                    <h1 class="hone">up to 20% off</h1>
                    <h2 class="htwo">Lanbio Oil</h2>
                    <div class="button-1 hover-btn-2">
                        <a href="#">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider end -->
</div>
<!-- Slider area end -->
<!-- product tabs container slider -->
<div class="product-tabs-container-slider product_block_container">
    <div class="container">

        <ul class="nav tabs_slider">
            <li class="active"><a href="#newarrival" data-toggle="tab">New Arrival</a></li>
            <li><a href="#bestseller" data-toggle="tab">Bestseller</a></li>
            <li><a href="#featuredproducts" data-toggle="tab">Featured Products</a></li>
        </ul>
        <div class="tab-content pos_content">
            <div class="tab-pane fade show active" id="newarrival">
                <div class="productTabContent0 owl-carousel">
                    <!-- single product -->
                    <?php foreach ($hang as $key => $value) : ?>
                        <div class="item-product">
                            <div class="product-miniature js-product-miniature">
                                <div class="img_block">
                                    <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="thumbnail product-thumbnail">
                                        <img src="assets/images/product/<?php echo $value["hinh_anh"] ?>" alt="harosa product">
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" data-toggle="modal" data-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product_desc">

                                    <h1> <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="product_name" title="Hummingbird printed t-shirt"><?php echo $value["ten_hang"] ?></a></h1>
                                    <div class="product-price-and-shipping">
                                        <span class="price price-sale"><?php echo $value["gia"] ?></span>
                                    </div>
                                    <div class="cart">
                                        <div class="product-add-to-cart">
                                            <a href="cart.html">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <!-- single product end -->
                </div>
            </div>
        </div>
        <!-- cms aboutus -->
        <div class="cms_aboutus">
            <img src="assets/images/bg/1_3.webp" alt="" class="img-responsive">
            <div class="cms-info">
                <div class="container">
                    <div class="cms-desc">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="info-content">
                                    <h4>About Us</h4>
                                    <h2>Welcome <span>Harosa</span> Store.</h2>
                                    <p>Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/images/service/2_3.webp" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cms aboutus end -->
        <!-- pos special products  -->
        <div class="home-two home-three">
            <div class="pos-special-products">
                <div class="container">
                    <div class="special-products">
                        <div class="pos_title">
                            <h2>Daily Deals</h2>
                        </div>
                        <div class="special-item1 pos_content owl-carousel">
                            <!-- special item -->
                            <?php foreach ($hang as $key => $value) : ?>
                                <div class="product-miniature js-product-miniature">
                                    <div class="img_block">
                                        <a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="thumbnail product-thumbnail">
                                            <img src="assets/images/product/<?php echo $value["hinh_anh"] ?>" alt="harosa product">
                                        </a>
                                        <ul class="product-flag">
                                            <li class="new"><span>New</span></li>
                                        </ul>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#product_modal" data-original-title="Quick View" class="quick_view"><i class="fa fa-search"></i></a>
                                        </div>
                                        <div class="product-price-and-shipping_top">
                                            <span class="discount-percentage discount-product">-8%</span>
                                        </div>

                                    </div>
                                    <div class="product_desc">
                                        <h1><a href="shop_detail.php?id=<?php echo $value["id"] ?>" class="product_name" title="Hummingbird printed t-shirt"><?php echo $value["ten_hang"] ?></a></h1>

                                        <div class="product-desc">
                                            <p><span><?php echo $value["mo_ta"] ?> </span></p>
                                        </div>
                                        <div class="product-price-and-shipping">

                                            <span class="price price-sale"><?php echo $value["gia"] ?></span>
                                        </div>
                                        <div class="cart">
                                            <div class="product-add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="countdown">
                                        <div class="time_count_down">
                                            <div data-countdown="<?php echo $value["ngay_nhap"] ?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- special item end -->
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pos special products end -->
        <!-- cms info  -->
        <div class="cms_info">
            <img src="assets/images/bg/1_2.webp" alt="" class="img-responsive">
            <div class="cms_container">
                <div class="container">
                    <div class="info_content">
                        <p class="txt1">Something mystic, Something magical...</p>
                        <h2>Natural Spa</h2>
                        <p class="phone">(+08) 123 456 7890</p>
                        <p class="txt2">Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Etiam porttitor, lacus in luctus molestie</p>
                        <a href="#">Shop Collection in new year</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- cms info end -->
        <!-- home banner -->
        <div class="home-banner">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="banner-box m-0">
                            <a href="shop.html"><img src="assets/images/banner/1_1.webp" alt="harosa"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-box m-0">
                            <a href="shop.html"><img src="assets/images/banner/2_1.webp" alt="harosa"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home banner end -->
        <!-- footer start -->
        <footer id="footer">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="ft_newsletter">
                            <div id="block-newsletter-label">
                                <div class="title-newsletter">
                                    <h2>Newsletter sign up</h2>
                                    <p class="desc">(Get 30% OFF coupon today subscibers)</p>
                                </div>
                            </div>
                            <form action="#">
                                <input class="btn btn-primary float-xs-right hidden-xs-down" name="submitNewsletter" value="Subscribe" type="submit">
                                <div class="input-wrapper">
                                    <input name="email" value="" placeholder="Your email address" aria-labelledby="block-newsletter-label" type="text">
                                </div>
                            </form>
                        </div>
                        <div class="pos_logo product_block_container">
                            <div class="logo-slider owl-carousel pos_content">
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/1.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/2.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/3.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/4.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/5.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/6.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/1.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="assets/images/brand/2.webp" alt="harosa brand logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include 'inc/footer.php'
                ?>