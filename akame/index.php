<?php 
    require 'classes/Database.class.php';

    $db = new Database();
    
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Hair Salon Tuấn Kiệt</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Welcome to hair salon!</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Thứ 2-Thứ 7: 8.00 to 21.00 <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: 033 7260 605</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                        
                        <a href="./index.php" class="nav-brand">Tuấn Kiệt</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.php">Trang Chủ</a></li>
                                    <li><a href="./portfolio.html">Thời Trang Tóc</a></li>
                                    <li><a href="./service.html">Dịch Vụ</a></li>
                                    <li><a href="./about.html">Sản phẩm</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Liên Hệ</a></li>
                                </ul>
                                <!-- Book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="./book_now.php" class="btn akame-btn">Đặt Lịch</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url(img/bg-img/16.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Chúng Tôi Quan Tâm Đến <br> Tóc Của Bạn</h2>
                                    <p data-animation="fadeInUp" data-delay="400ms">“Hãy khám phá phong cách của riêng bạn.Mái tóc là gốc con người - Thay đổi để làm mới bản thân”</p>
                                    <a href="about.html" class="btn akame-btn" data-animation="fadeInUp" data-delay="700ms">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url(img/bg-img/16.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Chúng Tôi Quan Tâm Đến <br> Tóc Của Bạn</h2>
                                    <p data-animation="fadeInUp" data-delay="400ms">“Hãy khám phá phong cách của riêng bạn.Mái tóc là gốc con người - Thay đổi để làm mới bản thân”</p>
                                    <a href="about.html" class="btn akame-btn active" data-animation="fadeInUp" data-delay="700ms">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Area Start -->
    <section class="akame-about-area section-padding-80-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Section Heading -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="section-heading mb-80">
                        <h2>Hair Salon</h2>
                        <p>Thiên đường làm đẹp tại Hair Salon Tuấn Kiệt</p>
                        <span>Liên Hệ</span>
                    </div>
                </div>

                <!-- About Us Thumbnail -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-thumbnail mb-80">
                        <img src="img/bg-img/15.jpg" alt="">
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-4">
                    <div class="about-us-content mb-80 pl-4">
                        <h3>Beautiful Hair Comes From A Legendary.</h3>
                        <p>“Working in a salon, you look at trends all day long. You’re looking at color all the time,what new products are coming out. You’re a part of the fashion industry,especially if you’re working in a higher-end salon.”</p>
                        <a href="#" class="btn akame-btn active mt-30">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-top mt-3"></div>
    </div>

    <!-- Our Service Area Start -->
    <section class="akame-service-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Dịch Vụ Của Chúng Tôi</h2>
                        <p>Chuyên làm đẹp về tóc,chăm sóc tóc và các dịch vụ làm đẹp toàn thân</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <img src="img/core-img/s1.png" alt="">
                        <h5>Nhuộm Tóc</h5>
                        <p>Tư vấn màu nhuộm,phù hợp với mọi khách hàng...</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="400ms">
                        <img src="img/core-img/s3.png" alt="">
                        <h5>Cắt Tóc</h5>
                        <p>Tạo kiểu tóc,phong cách riêng phù hợp cho khuôn mặt mỗi khách hàng.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/core-img/s4.png" alt="">
                        <h5>Kiểu Tóc</h5>
                        <p>Mẫu tóc thời thượng,tạo kiểu,tư vấn</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="800ms">
                        <img src="img/core-img/s3.png" alt="">
                        <h5>Nhuộm,Tạo Mẫu</h5>
                        <p>Kết hợp nhuộm và tạo mẫu tóc, đảm bảo chất lượng hàng đầu</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Service Area End -->

    <!-- Why Choose Us Area Start -->
    <section class="why-choose-us-area bg-gray section-padding-80-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="choose-us-thumbnail mt-30 mb-80">
                        <div class="choose-us-img bg-img" style="background-image: url(img/bg-img/4.jpg);"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>TẠI SAO NÊN CHỌN CHÚNG TÔI</h2>
                        <p>Chúng tôi là công ty hàng đầu tại Việt Nam, với hàng ngàn khách hàng mỗi năm, trên 10 năm kinh nghiệm, luôn sẵn sàng phục vụ khách hàng mỗi lúc.</p>
                    </div>
                    <!-- Choose Us Content -->
                    <div class="choose-us-content mt-30 mb-80">
                        <ul>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Tư vấn trực tiếp khi gọi cho chúng tôi.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Kinh nghiệm trên 10 năm, trải qua nhiều khách hàng.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Phản hồi nhanh yêu cầu của khách hàng, đáp ứng thời gian nhanh cho khách hàng</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Giải quyết nhanh những vấn đề phát sinh mà khách hàng chưa hài lòng.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us Area End -->

    <!-- Portfolio Area Start -->
    <section class="akame-portfolio section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Sản Phẩm Của Chúng Tôi</h2>
                        <p>Hãy thay đổi để khám phá bản thân. Đến với chúng tôi để được chia sẽ của những chuyên gia tạo mẫu tóc hàng đầu</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-menu text-center mb-30">
                        <button class="btn active" data-filter="*">Tất cả</button>
                        <button class="btn" data-filter=".haircuts">Cắt tóc</button>
                        <button class="btn" data-filter=".dye">Nhuộm tóc</button>
                        <button class="btn" data-filter=".shave">Cạo râu</button>
                        <button class="btn" data-filter=".hairstyle">Kiểu tóc</button>
                    </div>
                </div>
            </div>

            <div class="row akame-portfolio-area">
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-3 akame-portfolio-item haircuts mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/18.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Kiểu Tóc</h4>
                                <p>Kiểu tóc hiện đại,độc đáo</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/18.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>
                

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 akame-portfolio-item dye mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/6.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Kiểu Tóc</h4>
                                <p>Kiểu tóc hiện đại,độc đáo</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/6.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-lg-3 akame-portfolio-item shave mb-30 wow fadeInUp" data-wow-delay="400ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/25.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Kiểu Tóc</h4>
                                <p>Kiểu tóc hiện đại,độc đáo</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/25.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-3 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/8.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Kiểu Tóc</h4>
                                <p>Kiểu tóc hiện đại,độc đáo</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/8.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-3 akame-portfolio-item dye mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/21.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Kiểu Tóc</h4>
                                <p>Kiểu tóc hiện đại,độc đáo</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/21.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="view-all-btn mt-30 text-center">
                        <a href="portfolio.html" class="btn akame-btn">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->

    <!-- Our Expert Area Start -->
    <section class="akame-our-expert-area section-padding-80-0">

        <!-- Side Thumbnail -->
        <div class="side-thumbnail" style="background-image: url(img/bg-img/14.png);"></div>

        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Chuyên Gia Của Chúng Tôi</h2>
                        <p>Đến với chúng tôi bạn sẽ được tư vấn bởi những chuyên gia hàng đầu, bạn sẽ hài lòng với những mẫu tóc phù hợp, từ kiểu tóc cho bạn dự tiệc, đi làm..Các mẫu tóc luôn được tạo mới với xu hướng thế giới. Hãy đến với chúng tôi để làm mới mình</p>
                    </div>
                    <!-- Our Certificate -->
                    <div class="our-certificate-area mb-60 d-flex align-items-center">
                        <img src="img/core-img/certificate-1.png" alt="">
                        <img src="img/core-img/certificate-2.png" alt="">
                        <img src="img/core-img/certificate-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-member-img">
                            <img src="img/bg-img/10.jpg" alt="" height="316px">
                            <!-- Social Info -->
                            <div class="team-social-info d-flex align-items-center justify-content-center">
                                <div class="social-link">
                                    <a href="https://www.facebook.com/profile.php?id=100012953894663"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h5>Nguyễn Duy Nam</h5>
                            <p>Thợ làm tóc</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-80 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-member-img">
                            <img src="img/bg-img/11.jpg" alt="">
                            <!-- Social Info -->
                            <div class="team-social-info d-flex align-items-center justify-content-center">
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h5>Lương Sĩ Khang</h5>
                            <p>Nhà tạo mẫu</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-80 wow fadeInUp" data-wow-delay="600ms">
                        <div class="team-member-img">
                            <img src="img/bg-img/12.jpg" alt="">
                            <!-- Social Info -->
                            <div class="team-social-info d-flex align-items-center justify-content-center">
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h5>Nguyễn Thị Thu</h5>
                            <p>Nhà tạo mẫu tóc</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-80 wow fadeInUp" data-wow-delay="800ms">
                        <div class="team-member-img">
                            <img src="img/bg-img/13.jpg" alt="">
                            <!-- Social Info -->
                            <div class="team-social-info d-flex align-items-center justify-content-center">
                                <div class="social-link">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-info">
                            <h5>Crush Quốc Dân</h5>
                            <p>Tạo mẫu tóc nam</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Expert Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-top mt-3"></div>
    </div>

    <!-- Blog Area Start -->
    <section class="akame-blog-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Tin Mới Nhất</h2>
                        <p>Thông tin mới nhất về công nghệ tóc, kiểu tóc, cũng như xu hướng tóc.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="img/bg-img/1.jpg" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">99 các kiểu Tóc ngắn đẹp 2020 dành cho nữ phong cách Hàn Quốc bạn nên thử..</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> January 1, 2020</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>Các Kiểu Tóc ngắn đẹp 2020 phong cách Hàn Quốc bạn nữ nên thử</p>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-80 wow fadeInUp" data-wow-delay="400ms">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="img/bg-img/2.jpg" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Các kiểu tóc đẹp phù hợp với khuôn mặt được yêu thích 2020</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> January 1, 2020</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>Kiểu tóc đẹp 2020 phù hợp với từng khuôn mặt sẽ giúp bạn sở hữu một vẻ ngoài xinh xắn và trẻ trung.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-80 wow fadeInUp" data-wow-delay="600ms">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="img/bg-img/3.jpg" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Những kiểu tóc ngắn đẹp sẽ được yêu thích nhất năm 2020</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> January 1, 2020</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>Tóc ngắn đang trở thành xu hướng tóc hot nhất năm 2019 không chỉ được đa số phái đẹp lựa chọn.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <!-- Call To Action Area Start -->
    <section class="akame-cta-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 col-xl-5">
                    <div class="cta-content">
                        <h2>Lựa chọn số một cho bạn</h2>
                        <p>Đến với chúng tôi bạn sẽ được tư vấn bởi chuyên gia hàng đầu về tóc, bạn sẽ trải nghiệm những điều mới mẻ. Hãy khám phá bản thân mình bạn nhé</p>
                        <div class="akame-btn-group mt-30">
                            <a href="book_now.php" class="btn akame-btn active mr-3 mb-3 mb-sm-0">Đặt Lịch Hẹn</a>
                            <a href="contact.html" class="btn akame-btn">Liên Hệ Chúng Tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Thumbnail -->
        <div class="cta-thumbnail bg-img" style="background-image: url(img/bg-img/cta.png);"></div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <h1 class="footer-logo" >Tuấn Kiệt</h1>

                        <p class="mb-30">Chúng tôi mong muốn được phục vụ bạn và bạn sẽ được trải nghiệm những dịch của chúng tôi với những ưu đãi theo từng gói dịch vụ.</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.Thiết Kế NamNYH</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Giờ mở cửa</h4>

                        <!-- Open Times -->
                        <div class="open-time">
                            <p>Thứ 2: Thứ 6: 8.00 - 21.00</p>
                            <p>Thứ 7: 10.00 - 19.00</p>
                            <p>Chủ Nhật: Nghỉ</p>
                        </div>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="https://www.facebook.com/profile.php?id=100012953894663" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="https://www.instagram.com/namnyh28/" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Đăng ký nhận thông tin khuyến mãi</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            <input type="email" name="email" value="" placeholder="Email">
                            <input type="submit" name="submit" value="Gửi">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
   
    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>