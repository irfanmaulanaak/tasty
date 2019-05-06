<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mamkuy - Easy Food Reservation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/png" href="images/logo2.png">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <div id='logo'><img src='images/logo_white.png' style="width: 60px; height: 60px;"></div>
      <a class="navbar-brand" href="index.php">Mamkuy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
          <?php
          session_start();
          if (isset($_SESSION['user_system_name'])) {
            $nama = $_SESSION['user_system_name'];
            echo "<li class=\"nav-item\"><a href=\"reservation.php\" class=\"nav-link\">Reservation</a></li>";
            echo "<li class=\"nav-item\"><a href=\"cart.php\" class=\"nav-link\">Cart</a></li>";
            echo "<div class=\"nav-item\"><a class=\"nav-link\">$nama</a></div>";
            echo "<div class=\"nav-item\"style=\"background: #ffc107 ;border-radius: 5px\"><a class=\"nav-link\"href=\"logout.php\">Logout</a></div>";
          } else {
            echo "<li class=\"nav-item\" id=\"register\" style=\"border-style: solid; border-width: 2px; border-color: #ffff ;border-radius: 5px; margin: 5px;\"><a href=\"register.php\" class=\"nav-link\" style=\"font-weight: 500;\">REGISTER</a></li>";
            echo "<li class=\"nav-item\" id=\"login\" style=\"background: #ffc107 ;border-radius: 5px; margin: 5px;\"><a href=\"login.php\" class=\"nav-link\" style=\"font-weight: 500;\">LOGIN</a></li>";
            // header('Location: index.php');
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-10 col-sm-12 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-3">About Us</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Kelompok 5</span>
          <h2>Our Best Team</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="block-10">
            <div class="person-info">
              <span class="name">Irfan Maulana Akbar</span>
              <span class="position">175150207111036</span>
            </div>
            <div class="chef-img" style="background-image: url(images/About-irfan.jpg)"></div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="block-10">
            <div class="person-info">
              <span class="name">Riefqi Ardhya Bisma</span>
              <span class="position">175150201111050</span>
            </div>
            <div class="chef-img" style="background-image: url(images/About-bimbim.jpg)"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="instagram">
    <div class="container-fluid">
      <div class="row no-gutters justify-content-center pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2><span>Instagram</span></h2>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(images/insta-2.jpg);">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(images/insta-3.jpg);">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(images/insta-4.jpg);">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/insta-5.jpg);">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Tasty</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Jam Kerja</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Senin: <span>08: - 22:00</span></a></li>
              <li><a href="#" class="py-2 d-block">Selasa: <span>08: - 22:00</span></a></li>
              <li><a href="#" class="py-2 d-block">Rabu: <span>08: - 22:00</span></a></li>
              <li><a href="#" class="py-2 d-block">Kamis: <span>08: - 22:00</span></a></li>
              <li><a href="#" class="py-2 d-block">Jumat: <span>08: - 22:00</span></a></li>
              <li><a href="#" class="py-2 d-block">Sabtu: <span>08: - 22:00</span></a></li>
              <li><a href="#" class="py-2 d-block">Minggu: <span>08: - 22:00</span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Contact Information</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Jl. Veteran Malang Indonesia</a>
              </li>
              <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
              <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
              <li><a href="#" class="py-2 d-block">email@email.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Newsletter</h2>
            <p>Far far away, behind the word mountains, far from the countries.</p>
            <form action="#" class="subscribe-form">
              <div class="form-group">
                <span class="icon icon-paper-plane"></span>
                <input type="text" class="form-control" placeholder="Subscribe">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>