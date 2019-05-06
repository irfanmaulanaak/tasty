<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tasty - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <?php
  session_start();
  $namauser = $_SESSION['user_system_name'];
  include_once "db.php";
  $sql1 = "SELECT * from user where name='$namauser'";
  $result1 = $mysqli->query($sql1);
  $username = $result1->fetch_object();

  ?>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Tasty</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <?php
          if (isset($_SESSION['user_system_name'])) {
            echo "<li class=\"nav-item\"><a href=\"reservation.php\" class=\"nav-link\">Reservation</a></li>";
            echo "<li class=\"nav-item active\"><a href=\"cart.php\" class=\"nav-link\">Cart</a></li>";
            echo "<div class=\"nav-item\"><a class=\"nav-link\">$namauser</a></div>";
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
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span>
                        </p>
                        <h1 class="mb-3">Check your own cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2>Your Cart</h2>
                </div>
            </div>

            <div class="container">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:90%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td data-th="Product"> -->
                                <?php
                include_once "db.php";
                $sql = "SELECT * from cart";
                $result = $mysqli->query($sql);
                if ($result->num_rows) {
                  while ($post = $result->fetch_object()) {
                    echo "
                    <tr>
                    <td data-th=\"Product\">
                  <div class=\"row\">
                  <div class=\"col-sm-3\"><img src=\"$post->foto_produk\" width=\"90\" height=\"90\" /></div>
                  <div class=\"col-sm-9\">
                    <h4 class=\"nomargin\">$post->nama_produk</h4>
                    <button class=\"btn btn-info btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <button class=\"btn btn-danger btn-sm\"><i class=\"fa fa-trash-o\"></i></button>
                    <td data-th=\"Price\">$post->harga_produk</td>

                  </div>
                </div>
                </td>
                </tr>                
                  ";
                  }
                }

                ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td><a href="reservation.php" class="btn btn-warning"><i class="fa fa-angle-left"></i>
                                    Continue Shopping</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                            <td><a href="#" class="btn btn-success btn-block">Checkout <i
                                        class="fa fa-angle-right"></i></a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Tasty</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
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
                        </script> All rights reserved | This template is made with <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>