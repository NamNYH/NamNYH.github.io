<?php 
    require 'classes/Database.class.php';

    $db = new Database();
    $customers = $db->table('customers')->get();

    if (isset($_POST['phone'])) {
      $db->table('customers')->insert([
        'name' => $_POST['name'],
        'phone' => $_POST['phone'],
        'gender' => $_POST['gender'],
        'date' => $_POST['date'],
        'stylist' => $_POST['stylist'],
        'time' => $_POST['time']
        
      ]);
    }
    

              
              
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Hair Salon Tuấn Kiệt - Book Now</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="đặt_lịch.css">
    	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript">
          function getInfo(e) {
            e.preventDefault();

            var flag = false;

              var phone = document.getElementById("phone").value;
              var username = document.getElementById("username").value;
              //kiểm tra dữ liệu nhập vào form
              //check phone
              if(phone == ""){
                document.getElementById("errorphone").innerHTML ="Vui lòng nhập vào số điện thoại của bạn";
                flag = true;
              } else {
                document.getElementById("errorphone").innerHTML ="";
              }
              //check username
              if(username == "") {
                  document.getElementById("errorusername").innerHTML ="Vui lòng nhập vào họ tên của bạn";
                  flag = true;
              }
              else{
                  document.getElementById("errorusername").innerHTML ="";
              }

              if (flag === false) {
                e.target.form.submit();
              }
          }
      </script>
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

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
                        <a href="./index.php" class="nav-brand" >Tuấn Kiệt</a>

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
                                    <li class="active"><a href="./index.php">Trang Chủ</a></li>
                                    <li><a href="./portfolio.html">Thời Trang Tóc</a></li>
                                    <li><a href="./service.html">Dịch Vụ</a></li>
                                    <li><a href="./about.html">Sản Phẩm</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./contact.html">Liên Hệ</a></li>
                                </ul>

                                <!-- Cart Icon -->
                                <!--
                                <div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="#"><i class="icon_cart"></i></a>
                                </div>
                                -->

                                <!-- Book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="./book_now.php" class="btn-akame-btn">Đặt Lịch</a>
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
          <section>
            <h1>Đặt lịch siêu tốc</h1>
            <form action="" method="post">
              <input type="hidden" name="csrf" value="<?php echo time() ?>">
              <h5 class="h5">Quý khách vui lòng cho biết thông tin</h5>
              <input type="tel" name="phone" id="phone" placeholder="Số Điện Thoại" value="" />
              <span id="errorphone" class="error"></span>
              <br />
              <select name="gender" class="gender">
                <option value="0">NAM</option>
                <option value="1">NỮ</option>
              </select>
              <input type="textbox" name="name" id="username" placeholder="Họ Và Tên" />
              <span id="errorusername" class="error"></span>

              <h5 class="h51">Thông tin dịch vụ</h5>
              <p class="p1">Thời gian đặt lịch:</p>
              <input type="date" name="date" id="phone" /><br />           
              <p class="p2">Chọn khung giờ phục vụ(*)</p>
              <select name="time" class="time-frame" size="10">
                <option>8:00 - <?php echo in_array('08:00:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                <option>9:00 - <?php echo in_array('09:00:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                <option>10:00 - <?php echo in_array('10:00:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                <option>13:30 -<?php echo in_array('13:30:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                <option>15:00 - <?php echo in_array('15:00:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                <option>16:30 - <?php echo in_array('16:30:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                <option>18:00 - <?php echo in_array('18:00:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                <option>19:00 -<?php echo in_array('19:00:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                <option>20:00 - <?php echo in_array('20:00:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                <option>21:00 - <?php echo in_array('21:00:00', array_column($customers, 'time')) ? 'Hết' : 'Còn' ?>Chỗ</option>
                
              </select>
              <button onclick="getInfo(event)" class="submit">Đặt lịch hẹn</button><br>
              <button style="margin-top: 10px;width: 30%;height: 50px;background-color: #227226;border: 1px solid #ddd;border-radius: 3px;font-size: 25px;"><a href="xem_lai_lich.php" style="color:white;">Xem Thông tin đã đặt</a></button>
              <button style="margin-top: 10px;width: 20%;height: 50px;background-color: #227226;border: 1px solid #ddd;border-radius: 3px;font-size: 25px;"><a href="delete_lich.php" style="color:white;" >Hủy đặt lịch</a></button>
          </form>
          

		</section>
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
  </body>
</html>
  