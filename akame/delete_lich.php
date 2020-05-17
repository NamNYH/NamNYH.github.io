<!DOCTYPE html>
<html>
<head>
	<title>Akame-Thông tin đặt lịch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="xem_lai_lich.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		table {
		border-collapse: collapse;
		width: 100%;
		color: #588c7e;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
		margin-top: -50px;
		}
		th {
		background-color: #588c7e;
		color: white;
		}
		/*tr:nth-child(even) {background-color: #f2f2f2}*/
	</style>
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
                        <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./index.php">- Home</a></li>
                                            <li><a href="./about.html">- About Us</a></li>
                                            <li><a href="./service.html">- Services</a></li>
                                            <li><a href="./portfolio.html">- Portfolio</a></li>
                                            <li><a href="./blog.html">- Blog</a></li>
                                            <li><a href="./contact.html">- Contact</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="./portfolio.html">Portfolio</a></li>
                                    <li><a href="./service.html">Services</a></li>
                                    <li><a href="./about.html">Product</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>

                                <!-- Book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="./book_now.php" class="btn akame-btn">Book Now</a>
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


    <h1 style="
    text-align: center;
    background: #4c4d50;
    margin: 0;
    padding: 20px;
    color: #f5c04f;
    text-transform: uppercase;
    font-weight: 700;
    font-family: 'Chakra Petch', sans-serif;
    letter-spacing: 2px;
    text-shadow: 3px 4px black;
    font-size: 32px;
    border-bottom: 50px solid white;">Hủy Đặt lịch</h1>

	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Gender</th>
			<th>Stylist</th>
			<th>Date</th>
			<th>Time</th>

		</tr>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "akame");
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "DELETE FROM customers WHERE name='Nguyen Duy Nam' ";

            if (mysqli_query($conn, $sql)) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }

            mysqli_close($conn);
		?>
	</table>

	<!-- Border -->
    <div class="container">
        <div class="border-top mt-3"></div>
    </div>

	<!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>

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
</body>
</html>