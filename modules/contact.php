<?php   include "../modules/db.php";
        include "../modules/functions.php";
        include "mail.php";?>

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
    <link rel = "stylesheet" href = "../css/contact.css">
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
                          <a class="dropdown-item" href="../products/products_sports.php">Đồ thể thao</a>
                          <a class="dropdown-item" href="../products/products_shirts.php">Áo</a>
                          <a class="dropdown-item" href="../products/products_pants.php">Quần</a>
                          <a class="dropdown-item" href="../products/products_shoes.php">Giày</a>
                        </div>
                    </li>


                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="services.html">Dịch vụ</a>
                    </li>

                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="contact.php">Liên hệ</a>
                    </li>

                    <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-uppercase text-dark" href="aboutus.html">Giới thiệu</a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </nav>
    <!--end of navbar -->
    <div class="container contact-form">
        <div class="row">
            <div class="col-md-7">
              <form action="mail.php" method="post" class="contact">
              <h4>Liên hệ</h4>
                <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">Họ và Tên</label>
                  <input name="fullName" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nhập họ và tên">
                </div>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Email</label>
                  <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập email">
                </div>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Số điện thoại</label>
                  <input name="phoneNumber" type="text" class="form-control"
                  id="formGroupExampleInput2" placeholder="Nhập số điện thoại">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Ghi chú</label>
                  <textarea name="messages" class="form-control"
                  id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <div class="col-md-5 ">
              <h4>Liên hệ chúng tôi</h4><hr>
              <div class="mt-4">
                  <div class="d-flex">
                    <p >Địa chỉ: 233A Đ. Phan Văn Trị, Phường 11, Bình Thạnh, Thành phố Hồ Chí Minh</p>
                  </div><hr>
                  <div class="d-flex">    
                    <p>Điện thoại : 0979999999</p>
                  </div><hr>
                  <div class="d-flex">
                    <p>Email: lienhe@gmail.com</p>
                  </div><hr>
                  <div class="d-flex">    
                    <p>Website: www.nike.com</p>
                  </div><hr>
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src = "js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>