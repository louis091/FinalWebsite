<?php include "modules/db.php";
      include "modules/functions.php";
?>
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Nike Store</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main-site.css">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel default css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.php">
                <img src="assets/img/logo.png" alt="">
            </a>
            <!--logo-->
            <div class = "order-lg-2 nav-btns">
                <button type = "button" class = "btn position-relative">
                  <a style="color: inherit;" href="modules/cart.html"><i class="fa fa-shopping-cart"></i></a>
                  <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                </button>
                <button type = "button" name = "login-user" class = "btn position-relative">
                  <a style="color: inherit;" href="login.php"><i class = "fa fa-user"></i></a>
                  <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                </button>
                <button type = "button" class = "btn position-relative">
                  <i class = "fa fa-search"></i>
                </button>
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle = "collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class = "navbar-nav mx-auto text-center">

                    <li class="nav-item px-2 py-2 dropdown">
                        <a class="nav-link text-uppercase text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">sản phẩm</a>                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="products/products_sports.php">Đồ thể thao</a>
                            <a class="dropdown-item" href="products/products_shirts.php">Áo</a>
                            <a class="dropdown-item" href="products/products_pants.php">Quần</a>
                            <a class="dropdown-item" href="products/products_shoes.php">Giày</a>
                        </div>
                    </li>

                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="modules/services.html">Dịch vụ</a>
                    </li>

                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="modules/contact.php">Liên hệ</a>
                    </li>

                    <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-uppercase text-dark" href="modules/aboutus.html">Giới thiệu</a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </nav>
    <!--end of navbar -->
  <!--header-->
  <img src="homepage_banner.jpg" class="header">
  <!---end of header-->
  <!--Split-->
  <div class="split_1 text-center">
      <h2>Made for your every move</h2>
      <p>Bất kể việc tập luyện của bạn hôm nay hay ngày mai như thế nào, chúng tôi đã có những món đồ cần thiết để làm cho mọi chuyển động hằng ngày</p>
      <a class="btn" href="#">Khám phá ngay</a>
  </div>
  <!--End of Split-->

  <!--Small Slider - Shirts-->
  <div class="container-fluid">
    <div class="row">
      <p class="col fw-bold text-uppercase">Áo Nike: Thời trang đơn giản, thoải mái phong cách.</p>
      <a class="text-dark text-lg-end col" href="products/products_shirts.php">Xem thêm</a>
    </div>

    <div class="owl-carousel owl-theme">

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shirt/Shirt_5.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Dri-FIT Heritage<br>Men's Short-Sleeve Running Top</p>
            <p class="fw-bold">2,906,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shirt/Shirt_6.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Jordan Flight MVP<br>Men's Jacket</p>
            <p class="fw-bold">2,430,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shirt/Shirt_7.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Sportswear Storm-FIT ADV Tech<br>Women's Trench Coat</p>
            <p class="fw-bold">5,606,299₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shirt/Shirt_8.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Sportswear<br>Women's Woven Wave Dye Jacket</p>
            <p class="fw-bold">969,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->
      
      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shirt/Shirt_4.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Jordan Sport<br>Women's Tracksuit Jacket</p>
            <p class="fw-bold">2,959,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shirt/Shirt_2.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Zion<br>Men's T-Shirt</p>
            <p class="fw-bold">781,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shirt/Shirt_12.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Dri-FIT Advantage<br>Women's Tennis Dress</p>
            <p class="fw-bold">781,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->
  </div>
  </div>
  <!--End of Small Slider - Shirts-->

  <!--Small Slider - Pants-->
  <div class="container-fluid">
    <div class="row">
      <p class="col fw-bold text-uppercase">Quần Nike: Chất lượng và đẳng cấp.</p>
      <a class="text-dark text-lg-end col" href="products/products_pants.php">Xem thêm</a>
    </div>

    <div class="owl-carousel owl-theme">

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Pants/quan1.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Sportwears Essentials</p>
            <p class="fw-bold">2,906,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Pants/quan8.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Club</p>
            <p class="fw-bold">2,430,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Pants/quan2.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Dri-FIT Phenom Elite</p>
            <p class="fw-bold">1,069,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Pants/quan3.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Jordan Dri-FIT Sport</p>
            <p class="fw-bold">1,959,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->
      
      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Pants/quan4.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Jordan Flight Fleece</p>
            <p class="fw-bold">1,906,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Pants/quan5.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike One</p>
            <p class="fw-bold">2,430,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Pants/quan6.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Pro</p>
            <p class="fw-bold">1,319,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->
  </div>
  </div>
  <!--End of Small Slider - Pants-->

  <!--Featured-->
  <div class="featured container-fluid">
    <p class="text-lg-start text-uppercase fw-bold">nổi bật</p>
    <div class=" row">
      <img src="assets/featured1.jpg" class="col" alt="">
      
      <img src="assets/featured2.jpg" class="col" alt="">
    </div>
  </div>
  <!--End of Featured-->

  <!--Split Featured-->
  <div class="split_1 text-center">
    <h2 class="text-uppercase">Meet the zenvy, universa and go</h2>
    <p>Thể thao tươi trẻ với Sportswear Nike</p>
    <a class="btn" href="#">Xem thêm</a>
  </div>
<!--End of Split Featured-->
  <!--Small Slider - Sportswear-->
  <div class="container-fluid">
    <div class="row">
      <p class="col fw-bold text-uppercase">Sportswear Nike: Thoải mái, vượt qua giới hạn.</p>
      <a class="text-dark text-lg-end col" href="products/products_shirts.php">Xem thêm</a>
    </div>

    <div class="owl-carousel owl-theme">

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Sport/Sport_1.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Los Angeles Lakers Edition<br>Nike Dri-FIT NBA Swingman Jersey</p>
            <p class="fw-bold">2,906,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Sport/Sport_2.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Curry Golden State Warriors<br>Nike Dri-FIT NBA Swingman Jersey</p>
            <p class="fw-bold">2,430,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Sport/Sport_3.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Kevin Durant 2023 All-Star Edition<br>Nike Dri-FIT NBA Swingman Jersey</p>
            <p class="fw-bold">5,606,299₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Sport/Sport_4.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Ja Morant Memphis Grizzlies 2023<br>Nike Dri-FIT NBA Swingman Jersey</p>
            <p class="fw-bold">969,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->
      
      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Sport/Sport_10.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Yoga Dri-FIT Luxe<br>Women's Cropped Tank</p>
            <p class="fw-bold">1,087,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Sport/Sport_9.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>NikeCourt Dri-FIT Slam<br>Women's Tennis Tank Top</p>
            <p class="fw-bold">1,529,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Sport/Sport_8.png" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Zenvy<br>Women's H-Waisted Leggings</p>
            <p class="fw-bold">2,399,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->
  </div>
  </div>
  <!--End of Small Slider - Sportswear-->
<!--Dont miss content-->
  <div class="container-fluid">
    <div class="dontmiss">
      <p class="text-uppercase fw-bold">đừng bỏ lỡ</p>
      <img src="assets/dontmiss.jpg" alt="">
    </div>
  </div>
<!-- End of Dont miss content-->

<!--Split Dont miss-->
    <div class="split_1 text-center">
      <h2 class="text-uppercase">the world runs in our shoes</h2>
      <p>Cho mọi người cho mọi cuộc chạy, Nike Shoes</p>
      <a class="btn" href="#">Xem thêm</a>
    </div>
<!--End of Split Dont miss-->

  <!--Small Slider - Shoes-->
  <div class="container-fluid">
    <div class="row">
      <p class="col fw-bold text-uppercase">Giày Nike: Chạm đến đỉnh cao chinh phục thế giới.</p>
      <a class="text-dark text-lg-end col" href="products/products_shirts.php">Xem thêm</a>
    </div>

    <div class="owl-carousel owl-theme">

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shoes/giay1.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Pegasus FlyEase SE</p>
            <p class="fw-bold">4,515,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shoes/giay2.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Air Force 1 LE</p>
            <p class="fw-bold">5,302,649₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shoes/giay3.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike P-6000</p>
            <p class="fw-bold">3,759,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shoes/giay4.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Invincible 3 By You</p>
            <p class="fw-bold">3,709,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->
      
      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shoes/giay5.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Jordan Sport<br>Women's Tracksuit Jacket</p>
            <p class="fw-bold">2,959,000₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shoes/giay6.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Zion<br>Men's T-Shirt</p>
            <p class="fw-bold">781,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->

      <!---nhân bản copy từ đây-->
      <div class="item">
        <img src="assets/img/Shoes/giay7.jpg" alt="">
        <div class="card-body text-center">
          <div class="card-title">
            <p>Nike Dri-FIT Advantage<br>Women's Tennis Dress</p>
            <p class="fw-bold">781,149₫</p>
          </div>
        </div>
      </div>
      <!---nhân bản copy đến đây-->
  </div>
  </div>
  <!--End of Small Slider - Shoes-->


  <!--Split-->
  <div class="split_2 text-center text-white">
    <h2>NIKE, INC.NEWSROOM</h2>
    <p>Cập nhật nhưng tin tức mới nhất từ chúng tôi</p>
    <a class="btn" href="#">Xem thêm</a>
  </div>
  <!--End of Split-->
      <!-- Slide-->  
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/slide_1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Nike's 2023 Women Football Kits</h2>
                <p>Giới thiệu bộ sưu tập áo thi đấu bóng đá word cup nữ</p>
                <a href="#" class="btn btn-lg btn-primary">Xem thêm</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/slide_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>The Nike x AMBUSH Collection</h2>
              <p>Khuếch đại phong cách thể thao, tự do thể hiện bản thân</p>
              <a href="#" class="btn btn-lg btn-primary">Xem thêm</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/slide_3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Erling Haaland Signs With Nike</h2>
              <p>Tiền đạo ngôi sao của Man City đã chính thức ký hợp đồng với Nike</p>
              <a href="#" class="btn btn-lg btn-primary">Xem thêm</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- End of Slide--> 
  <!--Footer-->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div>
                <h3 class="footer-title text-white text-uppercase">The Nike Store</h3>
                <p class="footer-content mb-30 text-white">Nike - một thương hiệu thể thao hàng đầu trên toàn cầu, mang đến sự kết hợp hoàn hảo giữa phong cách và hiệu suất. Với hơn một thế kỷ kinh nghiệm, Nike đã trở thành biểu tượng của sự đổi mới và sự cống hiến trong ngành công nghiệp thể thao. Với một loạt sản phẩm đa dạng từ giày dép, quần áo, phụ kiện cho đến thiết bị thể thao, Nike luôn tạo ra những sản phẩm chất lượng cao, mang đến sự thoải mái và sự tự tin cho người dùng. Với cam kết không ngừng nâng cao và vượt qua giới hạn, Nike không chỉ là một thương hiệu, mà còn là một phong cách sống. Hãy trang bị bản thân với Nike và khám phá sức mạnh bên trong bạn. Just do it!</p>
              </div>
            </div>
            <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
              <div class="">
                <h4 class="footer-title text-white text-uppercase">Products</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="products/products_shirts.php" class="text-decoration-none">Áo</a>
                  </li>
                  <li>
                    <a href="products/products_pants.php" class="text-decoration-none">Quần</a>
                  </li>
                  <li>
                    <a href="products/products_shoes.php" class="text-decoration-none">Giày</a>
                  </li>
                  <li>
                    <a href="products/products_sports.php" class="text-decoration-none">Đồ thể thao</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
              <div>
                <h4 class="footer-title text-white text-uppercase">About Nike</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="#" class="text-decoration-none">Tin tức</a>
                  </li>
                  <li>
                    <a href="modules/aboutus.html" class="text-decoration-none">Giới thiệu</a>
                  </li>
                  <li>
                    <a href="modules/contact.php" class="text-decoration-none">Liên hệ</a>
                  </li>
                  <li>
                    <a href="modules/services.html" class="text-decoration-none">Dịch vụ</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
              <div>
                <h4 class="footer-title text-white text-uppercase">Address</h4>
                <ul class="list-unstyled">
                  <li>
                    <p class="text-white">0909123456</p>
                  </li>
                  <li>
                    <p class="text-white">Van Lang University</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
      
            <div class="copyright">
              <p class="text-white">Xây dựng và phát triển bởi <a href="#" target="_blank">Cát Đoan, Quang Vũ, Xuân Lợi, Thanh Sơn, Quốc Bảo</a></p>
            </div>
          </div>
        </div>
    </footer>
    <!--End of Footer-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--- owl caroulsel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--- owl carousel js-->
    <script src="js/owl.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>