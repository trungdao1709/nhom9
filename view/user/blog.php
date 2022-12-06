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
                        Gọi cho chúng tôi : <span>(012) 800 456 789</span>
                    </div>
                    <div class="info_box email">
                        email :  <a href="mailto:demo@example.com">demo@example.com</a>
                    </div>
                </div>

                <div class="offcanvas-accordion accordion" id="accordionExample">
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"><i class="first-icon fa fa-user-circle"></i> My Account</button>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <ul class="offcanvas-meta">
                                <li><a href="login.html">Tài khoản của tôi</a></li>
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
                                <span>Nhà</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span>Trang blog</span>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div> 
        </div>
        <!-- top breadcrumb end -->

        <!-- cart page content -->
        <div class="blog-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <div class="page-content blog-page blog-sidebar right-sidebar blog-text-align">
                            <!-- blog post -->
                            <article class="text-center">
                                <div class="blog-entry-header">
                                    <div class="post-category">
                                        <a href="#">Thời trang</a>
                                        <a href="#">Mẫu</a>
                                    </div>
                                    <h1><a href="single-blog.html">bài đăng hình ảnh trên blog</a></h1>
                                    <div class="post-meta">
                                        <a href="#"  class="post-author"><i class="fa fa-user"></i>Đăng bởi quản trị viên</a>
                                        <a href="#" class="post-date"><i class="fa fa-calendar"></i> 10 Tháng Ba, 2018 </a>
                                    </div>
                                </div>
                                <div class="post-thumbnail">
                                    <a href="single-blog.html"><img src="assets/images/blog/blog1.webp" alt="bege blog images"></a>
                                </div>
                                <div class="postinfo-wrapper">
                                    <p>Tất cả đều là hàng 100% chuẩn Auth, tuyệt đối nói không với hàng fake, bao test các kiểu. Loại bỏ tất cả những loại mỹ phẩm hàng giả, hàng nhái, hàng Trung Quốc ra khỏi thị trường và tiềm thức của chính người mua hàng.</p>
                                    <a class="readmore button" href="single-blog.html">Đọc thêm</a>
                                    <div class="social-sharing">
                                        <h3>Chia sẻ bài đăng này</h3>
                                        <div class="social-sharie">
                                            <ul class="social-icons">
                                                <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- blog post end -->
                            <!-- blog post -->
                            <article class="text-center">
                                <div class="blog-entry-header">
                                    <div class="post-category">
                                        <a href="#">PHÒNG TRƯNG BÀY</a>
                                        <a href="#">Mẫu</a>
                                    </div>
                                    <h1><a href="single-blog.html">BÀI BẰNG GALLERY</a></h1>
                                    <div class="post-meta">
                                        <a href="#"  class="post-author"><i class="fa fa-user"></i>Đăng bởi quản trị viên</a>
                                        <a href="#" class="post-date"><i class="fa fa-calendar"></i> 10 Tháng Ba, 2018</a>
                                    </div>
                                </div>
                                <div class="gallery-post  owl-carousel">
                                    <img src="assets/images/blog/blog2.webp" alt="bege blog images">
                                    <img src="assets/images/blog/blog3.webp" alt="bege blog images">
                                    <img src="assets/images/blog/blog4.webp" alt="bege blog images">
                                </div>
                                <div class="postinfo-wrapper">
                                    <br>
                                    <p>Nhằm đảm bảo chất lượng của mỹ phẩm không bị biến đổi do vận chuyển chúng tôi đã lựa chọn cách thức chuyển hàng bằng đường hàng không thay vì đường biển. Vì vậy, ngay sau khi chốt order, xác nhận đơn hàng và khách hàng chuyển tiền trong thời gian không lâu thì hàng về đến Việt Nam và được trao tận tay cho bạn.</p>
                                    <a class="readmore button" href="single-blog.html">Đọc thêm</a>
                                    <div class="social-sharing">
                                        <h3>Chia sẻ bài đăng này</h3>
                                        <div class="social-sharie">
                                            <ul class="social-icons">
                                                <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- blog post end -->
                            <!-- blog post -->
                            <article class="text-center">
                                <div class="blog-entry-header">
                                    <div class="post-category">
                                        <a href="#">VIDEOS</a>
                                    </div>
                                    <h1><a href="single-blog.html">BÀI ĐĂNG CÓ VIDEO</a></h1>
                                    <div class="post-meta">
                                        <a href="#"  class="post-author"><i class="fa fa-user"></i>Đăng bởi quản trị viên</a>
                                        <a href="#" class="post-date"><i class="fa fa-calendar"></i> 10 Tháng Ba, 2018 </a>
                                    </div>
                                </div>
                                <div class="post-thumbnail">
                                    <iframe src="https://www.youtube.com/embed/Q6dsRpVyyWs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                <div class="postinfo-wrapper">
                                    <p>Các sản phẩm của chúng tôi hoàn toàn là hàng xách tay của những thương hiệu nổi tiếng như: mỹ phẩm Tenna, bà già Agafi, CMO, Organic Shop, Pure Line…. Vì vậy bạn hoàn toàn yên tâm về chất lượng, mức độ an toàn và hiệu quả mà sản phẩm mang lại.</p>
                                    <a class="readmore button" href="single-blog.html">Đọc thêm</a>
                                    <div class="social-sharing">
                                        <h3>Chia sẻ bài đăng này</h3>
                                        <div class="social-sharie">
                                            <ul class="social-icons">
                                                <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- blog post end -->
                            <!-- blog post -->
                            <article class="text-center">
                                <div class="blog-entry-header">
                                    <div class="post-category">
                                        <a href="#">ÂM THANH</a>
                                        <a href="#">Mẫu</a>
                                    </div>
                                    <h1><a href="single-blog.html">ĐĂNG BẰNG ÂM THANH</a></h1>
                                    <div class="post-meta">
                                        <a href="#"  class="post-author"><i class="fa fa-user"></i>Đăng bởi quản trị viên</a>
                                        <a href="#" class="post-date"><i class="fa fa-calendar"></i> 10 Tháng Ba, 2018</a>
                                    </div>
                                </div>
                                <div class="post-thumbnail">
                                    <iframe width="100%" height="auto" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/68283293&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                </div>
                                <div class="postinfo-wrapper">
                                    <p>Các sản phẩm của chúng tôi hoàn toàn là hàng xách tay của những thương hiệu nổi tiếng như: mỹ phẩm Tenna, bà già Agafi, CMO, Organic Shop, Pure Line…. Vì vậy bạn hoàn toàn yên tâm về chất lượng, mức độ an toàn và hiệu quả mà sản phẩm mang lại.</p>
                                    <a class="readmore button" href="single-blog.html">Đọc thêm</a>
                                    <div class="social-sharing">
                                        <h3>Chia sẻ bài đăng này</h3>
                                        <div class="social-sharie">
                                            <ul class="social-icons">
                                                <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- blog post end -->
                            <!-- blog post -->
                            <article class="text-center">
                                <div class="blog-entry-header">
                                    <div class="post-category">
                                        <a href="#">Thời trang</a>
                                        <a href="#">Mẫu</a>
                                    </div>
                                    <h1><a href="single-blog.html">ĐĂNG BẰNG ÂM THANH</a></h1>
                                    <div class="post-meta">
                                        <a href="#"  class="post-author"><i class="fa fa-user"></i>Đăng bởi quản trị viên</a>
                                        <a href="#" class="post-date"><i class="fa fa-calendar"></i> 10 Tháng Ba, 2018</a>
                                    </div>
                                </div>
                                <div class="post-thumbnail">
                                    <iframe width="100%" height="auto" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/68283293&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                </div>
                                <div class="postinfo-wrapper">
                                    <p>Các sản phẩm của chúng tôi hoàn toàn là hàng xách tay của những thương hiệu nổi tiếng như: mỹ phẩm Tenna, bà già Agafi, CMO, Organic Shop, Pure Line…. Vì vậy bạn hoàn toàn yên tâm về chất lượng, mức độ an toàn và hiệu quả mà sản phẩm mang lại.</p>
                                    <a class="readmore button" href="single-blog.html">Đọc thêm</a>
                                    <div class="social-sharing">
                                        <h3>Chia sẻ bài đăng này</h3>
                                        <div class="social-sharie">
                                            <ul class="social-icons">
                                                <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- blog post end -->
                        </div>

                        <div class="pagination">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#">Tiếp theo</a>
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="blog_sidebar">
                            <div class="row_products_side">
                                <div class="product_left_sidbar">
                                    <div class="product-filter  mb-30">
                                        <h5>Tiềm kiếm </h5>
                                        <div class="search__sidbar">
                                            <div class="input_form">
                                            <input type="text" id="search_input" name="s" value="Search..." class="input_text">
                                            <button id="blogsearchsubmit" type="submit" class="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-filter  mb-30">
                                        <h5>Lưu trữ blog </h5>
                                        <div class="blog_Archives__sidbar">
                                            <ul>
                                                <li>
                                                    <a href="#">tháng 3 năm 2015</a>&nbsp;(1)</li>
                                                <li>
                                                    <a href="#">tháng 12 năm 2014</a>&nbsp;(3)</li>
                                                <li>
                                                    <a href="#">tháng 11 năm 2014</a>&nbsp;(4)</li>
                                                <li>
                                                    <a href="#">tháng 9 năm 2014</a>&nbsp;(1)</li>
                                                <li>
                                                    <a href="#">tháng 8 năm 2014</a>&nbsp;(1)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-filter  mb-30">
                                        <h5>Bài viết gần đây</h5>
                                        <div class="blog_Archives__sidbar">
                                            <ul>
                                                <li> <a href="#">bài đăng hình ảnh trên blog</a>&nbsp;(1)</li>
                                                <li> <a href="#">Đăng với Thư viện</a>&nbsp;(3)</li>
                                                <li><a href="#">Đăng có âm thanh</a>&nbsp;(4)</li>
                                                <li><a href="#">Đăng với Video</a>&nbsp;(1)</li>
                                                <li><a href="#">Đăng với văn bản</a>&nbsp;(1)</li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sidebar-single-banner">
                                        <a href="#">
                                            <img src="assets/images/banner/shop-sidebar.webp" alt="Banner">
                                        </a>
                                    </div>
                                    <div class="product-filter mb-30">
                                        <h5>Thẻ sản phẩm</h5>
                                        <div class="blog-tags">
                                            <a href="#">nhãn hiệu</a>
                                            <a href="#">màu đen</a>
                                            <a href="#">màu trắng</a>
                                            <a href="#">chíp chíp</a>
                                            <a href="#">bảng</a>
                                            <a href="#">Lorem</a>
                                            <a href="#">ipsum</a>
                                            <a href="#">Màu sắc</a>
                                            <a href="#">Cuốn hút</a></a>
                                            <a href="#">yêu thương</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart page content end -->
        

        <?php
        include 'inc/footer.php'
        ?>