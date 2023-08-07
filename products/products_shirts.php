<?php   include "../modules/db.php";
        include "../modules/functions.php";?>
        
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
    <link rel = "stylesheet" href = "../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- custom css -->
    <link rel = "stylesheet" href = "../css/main-site.css">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="../index.php">
                <img src="../assets/img/logo.png" alt="">
            </a>
            <!--end of  logo-->
            <div class = "order-lg-2 nav-btns">
                <button type = "button" class = "btn position-relative">
                  <a style="color: inherit;" href="../modules/cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                </button>
                <button type = "button" name = "login-user" class = "btn position-relative">
                  <a style="color: inherit;" href="../login.php"><i class = "fa fa-user"></i></a>
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
                          <a class="dropdown-item" href="products_sports.php">Đồ thể thao</a>
                          <a class="dropdown-item" href="products_shirts.php">Áo</a>
                          <a class="dropdown-item" href="products_pants.php">Quần</a>
                          <a class="dropdown-item" href="products_shoes.php">Giày</a>
                        </div>
                    </li>


                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="../modules/services.html">Dịch vụ</a>
                    </li>

                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="../modules/contact.php">Liên hệ</a>
                    </li>

                    <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-uppercase text-dark" href="../modules/aboutus.html">Giới thiệu</a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </nav>
    <!--end of navbar -->
    <!--Split Tiltle-->
    <div class="split_2 space text-center text-white">
        <h2 class="text-uppercase">Shirts</h2>
        <p>Đơn giản, tự do phong cách thể hiện</p>
    </div>
    <!--End of Split-->
    <!-- collection -->
    <section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative text-dark d-inline-block text-uppercase fw-bold">Tất cả sản phẩm</h2>
            </div>
            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-white active-filter-btn" data-filter = "*">Tất cả</button>
                    <button type = "button" class = "btn m-2 text-white" data-filter = ".best">Bán chạy</button>
                    <button type = "button" class = "btn m-2 text-white" data-filter = ".feat">Nổi bật</button>
                    <button type = "button" class = "btn m-2 text-white" data-filter = ".new">Mới</button>
                </div>

                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Sport/Sport_1.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">New</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Nike Sportswear Collection <br> Women's Cropped Tracksuit Jacket</p>
                            <span class = "fw-bold">3,109,000₫</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_2.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">-15%</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Zion <br> Men's T-Shirt</p>
                            <span class = "fw-bold">781,149₫</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_3.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Jordan Sport <br> Women's Cropped T-Shirt</p>
                            <span class = "fw-bold">969,000₫</span>
                        </div>
                    </div>

                    

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_4.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">New</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Nike Sportswear <br> Women's Tracksuit Jacket</p>
                            <span class = "fw-bold">2,959,000₫</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_5.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">-15%</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Nike Dri-FIT Heritage <br> Men's Short-Sleeve Running Top</p>
                            <span class = "fw-bold">2,906,149₫</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_6.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Jordan Flight MVP <br> Men's Jacket </p>
                            <span class = "fw-bold">2,430,149₫</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_7.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Nike Sportswear Storm-FIT ADV Tech <br> Women's Trench Coat </p>
                            <span class = "fw-bold">5,606,299₫</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_8.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Nike Sportswear <br> Women's Woven Wave Dye Jacket </p>
                            <span class = "fw-bold">3,319,000₫</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_9.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">New</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Paris Saint-Germain 2022/23 <br> Men's Jordan Dri-FIT ADV Football Shirt</p>
                            <span class = "fw-bold">3,779,000₫</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_10.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">New</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Nike Swift UV <br> Women's Running Jacket</p>
                            <span class = "fw-bold">2,649,000₫</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_11.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Nike Sportswear Tech Pack <br> Men's Woven Long-sleeve Shirt </p>
                            <span class = "fw-bold">2,959,000₫</span>
                        </div>
                    </div>


                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <!---ẢNH SẢN PHẨM PHẢI CÓ KÍCH THƯỚC 740 x 740 pixel-->
                            <img src = "../assets/img/Shirt/Shirt_12.png" class = "w-100">
                            <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">-20%</span>
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Nike Dri-FIT Advantage <br> Women's Tennis Dress </p>
                            <span class = "fw-bold">1,939,000₫</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->
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
            <img src="../assets/slide_1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Nike's 2023 Women Football Kits</h2>
                <p>Giới thiệu bộ sưu tập áo thi đấu bóng đá word cup nữ</p>
                <a href="#" class="btn btn-lg btn-primary">Xem thêm</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/slide_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>The Nike x AMBUSH Collection</h2>
              <p>Khuếch đại phong cách thể thao, tự do thể hiện bản thân</p>
              <a href="#" class="btn btn-lg btn-primary">Xem thêm</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/slide_3.jpg" class="d-block w-100" alt="...">
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
                    <a href="products_shirts.php" class="text-decoration-none">Áo</a>
                  </li>
                  <li>
                    <a href="products_pants.php" class="text-decoration-none">Quần</a>
                  </li>
                  <li>
                    <a href="products_shoes.php" class="text-decoration-none">Giày</a>
                  </li>
                  <li>
                    <a href="products_sports.php" class="text-decoration-none">Đồ thể thao</a>
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
                    <a href="../modules/aboutus.html" class="text-decoration-none">Giới thiệu</a>
                  </li>
                  <li>
                    <a href="../modules/contact.php" class="text-decoration-none">Liên hệ</a>
                  </li>
                  <li>
                    <a href="../modules/services.html" class="text-decoration-none">Dịch vụ</a>
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
    <script src = "js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "../js/script.js"></script>
</body>
</html>