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
            <a class="navbar-brand" href="index.html">Mamkuy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <?php
				session_start();
				if(isset($_SESSION['user_system_name'])){
                    $nama = $_SESSION['user_system_name'];
                    echo "<li class=\"nav-item\"><a href=\"menu.php\" class=\"nav-link\">Menu</a></li>";
                    echo "<li class=\"nav-item\"><a href=\"reservation.php\" class=\"nav-link\">Reservation</a></li>";
					echo "<div class=\"nav-item\"><a class=\"nav-link\">$nama</a></div>";
					echo "<div class=\"nav-item\"style=\"background: #ffc107 ;border-radius: 5px\"><a class=\"nav-link\"href=\"logout.php\">Logout</a></div>";
				}else{
					echo "<li class=\"nav-item\" id=\"register\" style=\"background: #ffc107 ;border-radius: 5px\"><a href=\"register.php\" class=\"nav-link\" style=\"font-weight: 500;\">REGISTER</a></li>";
                    echo "<li class=\"nav-item\" id=\"login\" style=\"background: #ffc107 ;border-radius: 5px\"><a href=\"login.php\" class=\"nav-link\" style=\"font-weight: 500;\">LOGIN</a></li>";
                    header('Location: index.php');
				}
                ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('images/slideshow_menu-mie%20setan.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-10 col-sm-12 ftco-animate text-center">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Restaurant</span></p>
                        <h1 class="mb-3">Temukan tempat makan</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container special-dish">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Restoran</span>
                    <h2>Restoran yang Tersedia</h2>
                </div>
            </div>
            <div class="row d-flex no-gutters">
            <?php
            include_once "db.php";
            $sql = "SELECT * from restaurant";
            $result = $mysqli->query($sql);
            if($result->num_rows){
                while ($post = $result->fetch_object()){
                    echo"
                    <div class=\"col-lg-6\">
                    <div class=\"block-3 d-md-flex ftco-animate\">
                      <div class=\"image order-last\" style=\"background-image: url($post->foto);\"></div>
                      <div class=\"text text-center order-first\">
                        <h2 class=\"heading\">$post->nama</h2>
                        <p>$post->deskripsi</p>
                        <span class=\"price\">$post->jalan</span>
                             <a href=\"menu.php?id_restaurant=$post->id_restaurant\" style=\"background: #ffc107 ;border-style: none;border-radius: 5px; font-weight: 900; color: #ffff; padding: 0.5rem 4.4rem;\">Pilih</a>
                      </div>
                    </div>
                  </div>";
                }
            }
            ?>

            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Tasty</h2>
                        <p>Memesan makanan jadi mudah tanpa perlu mengantri.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Opening Hours</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Monday: <span>08: - 22:00</span></a></li>
                            <li><a href="#" class="py-2 d-block">Tuesday: <span>08: - 22:00</span></a></li>
                            <li><a href="#" class="py-2 d-block">Wednesday: <span>08: - 22:00</span></a></li>
                            <li><a href="#" class="py-2 d-block">Thursday: <span>08: - 22:00</span></a></li>
                            <li><a href="#" class="py-2 d-block">Friday: <span>08: - 22:00</span></a></li>
                            <li><a href="#" class="py-2 d-block">Saturday: <span>08: - 22:00</span></a></li>
                            <li><a href="#" class="py-2 d-block">Sunday: <span>08: - 22:00</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
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