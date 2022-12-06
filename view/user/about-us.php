<?php
include 'inc/header.php'
?>

<!-- offcanvas Start -->
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

<!-- top breadcrumb -->
<div class="top_breadcrumb">
    <div class="breadcrumb_container ">
        <div class="container">
            <nav data-depth="3" class="breadcrumb">
                <ol>
                    <li>
                        <a href="#">
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Về chúng tôi</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->

<!-- About page area -->
<div class="about-page-area">

    <div class="about__us_page_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_h2__left_image">
                        <img alt="" src="assets/images/banner/about-us-img1.webp">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner_h2_Right_text">
                        <div class="wpb_wrapper">
                            <h3>CHÚNG TÔI TẠO RA <br> Sắc đẹp cho mọi người</h3>
                            <p>Ngày nay, làm đẹp được xem là một nhu cầu quan trọng và thiết yếu của cuộc sống. Cũng chính vì vậy mà các doanh nghiệp, nhà sản xuất cho ra đời rất nhiều loại mỹ phẩm chăm sóc sắc đẹp khác nhau. Trong đó, Nga là một trong số những quốc gia có nhiều sản phẩm và thương hiệu mỹ phẩm nổi tiếng an toàn cho da, làm đẹp hiệu quả. Các sản phẩm của những thương hiệu đó đều được người tiêu dùng quốc tế ưa chuộng, đặc biệt là thị trường Việt Nam.
                                Hiện nay thị trường mỹ phẩm Nga tại Việt Nam tồn tại rất nhiều loại sản phẩm với mức giá khác nhau. Bên cạnh sản phẩm có nguồn gốc chính hãng là những dòng mỹ phẩm không rõ xuất xứ, nhãn mác mập mờ và thành phần không đảm bảo.</p>
                            <p class="text-center">
                                <a href="#"> xem mặt hàng</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="funfact-area bg--white" id="funfact-area">
        <div class="funfacts">
            <div class="container">
                <div class="row g-0">

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact">
                            <div class="fun__fact_img">
                                <img src="assets/images/icon-img/about-us-icon1.webp" alt="">
                            </div>
                            <div class="fun_fact_info">
                                <h1>
                                    <span class="counter">2169</span>
                                </h1>
                                <h5>KHÁCH HÀNG HẠNH PHÚC</h5>
                            </div>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact">
                            <div class="fun__fact_img">
                                <img src="assets/images/icon-img/about-us-icon2.webp" alt="">
                            </div>
                            <div class="fun_fact_info">
                                <h1>
                                    <span class="counter">369</span>
                                </h1>
                                <h5>GIẢI THƯỞNG ĐÃ ĐẠT ĐƯỢC</h5>
                            </div>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact">
                            <div class="fun__fact_img">
                                <img src="assets/images/icon-img/about-us-icon3.webp" alt="">
                            </div>
                            <div class="fun_fact_info">
                                <h1>
                                    <span class="counter">689</span>
                                </h1>
                                <h5>CHÚNG TÔI LÀM VIỆC</h5>
                            </div>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact">
                            <div class="fun__fact_img">
                                <img src="assets/images/icon-img/about-us-icon4.webp" alt="">
                            </div>
                            <div class="fun_fact_info">
                                <h1>
                                    <span class="counter">2169</span>
                                </h1>
                                <h5>Hoàn thiện các hợp đồng sản phẩm</h5>
                            </div>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                </div>
            </div>
        </div>
    </div>

    <div class="abou_skrill__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="skrill_here">
                        <h3>CHÚNG TÔI CÓ KỸ NĂNG ĐỂ THỂ HIỆN</h3>
                        <div class="ht-single-about">
                            <div class="skill-bar">
                                <div class="skill-bar-item">
                                    <span>Thiết kế vô hạn</span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft width80" data-progress="80%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">80%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-bar-item">
                                    <span>Sản Phẩm &amp; Chính hãng</span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft width90" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">100%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-bar-item">
                                    <span>chứa thành phần &amp; làm đẹp cho da</span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft width70" data-progress="70%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">70%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-bar-item">
                                    <span>đảm bảo an toàn</span>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft width95" data-progress="95%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                            <span class="text-top">95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner_h2__left_image lft_to_right">
                        <img alt="" src="assets/images/banner/about-us-img2.webp">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'inc/footer.php'
?>