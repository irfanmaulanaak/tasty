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

    <?php
    $id_restaurant = $_GET['id_restaurant'];
    session_start();
    $namauser = $_SESSION['user_system_name'];
    if (!$id_restaurant) {
        header('Location: restaurant.php');
    }

    include_once "db.php";
    $sql = "SELECT * from restaurant where id_restaurant=$id_restaurant";
    $result = $mysqli->query($sql);

    $post = $result->fetch_object();
    $sql1 = "SELECT * from user where name='$namauser'";
    $result1 = $mysqli->query($sql1);
    $username = $result1->fetch_object();

    ?>

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
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <?php
                    if (isset($_SESSION['user_system_name'])) {
                        echo "<li class=\"nav-item\"><a href=\"reservation.php\" class=\"nav-link\">Reservation</a></li>";
                        echo "<li class=\"nav-item\"><a href=\"cart.php\" class=\"nav-link\">Cart</a></li>";
                        echo "<div class=\"nav-item\"><a class=\"nav-link\">$namauser</a></div>";
                        echo "<div class=\"nav-item\"style=\"background: #ffc107 ;border-radius: 5px\"><a class=\"nav-link\"href=\"logout.php\">Logout</a></div>";
                    } else {
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
        <div class="slider-item" style="background-image: url('<?php echo $post->foto ?>');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-10 col-sm-12 ftco-animate text-center">
                        <p><?php echo $post->nama ?></p>
                        <h1 class="mb-3">Jelajah menu makanan</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading"><?php echo $post->nama ?></span>
                    <h2>Menu yang Tersedia</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 dish-menu">
                    <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link py-3 px-4 active" id="v-pills-makanan-tab" data-toggle="pill" href="#v-pills-makanan" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-meat"></span> Makanan</a>

                        <a class="nav-link py-3 px-4" id="v-pills-dessert-tab" data-toggle="pill" href="#v-pills-dessert" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-cutlery"></span> Dessert</a>

                        <a class="nav-link py-3 px-4" id="v-pills-minuman-tab" data-toggle="pill" href="#v-pills-minuman" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span> Minuman</a>
                    </div>
    
    
                    <div class="tab-content py-5" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-makanan" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <?php
                                $sql = "SELECT * from makanan where id_restaurant=$id_restaurant";
                                $result = $mysqli->query($sql);
                                if ($result->num_rows) {
                                    while ($post = $result->fetch_object()) {
                                        echo "<div class=\"col-lg-6\">
                                        <div class=\"menus d-flex ftco-animate\">
                                        <div class=\"menu-img\" style=\"background-image: url($post->foto_makanan);\"></div>
                                        <div class=\"text d-flex\">
                                            <div class=\"one-half\">
                                                <h3>$post->nama_makanan</h3>
                                                <p>$post->deskripsi_makanan</p>
                                            </div>
                                            <div class=\"one-forth\">
                                                <span class=\"price\">Rp.$post->harga_makanan</span>
                                                <form method=\"GET\" action=\"cart_process.php\">
                                                <input class=\"input100\" type=\"hidden\" name=\"id_restaurant\ value=\"$id_restaurant\">
                                                <input class=\"input100\" type=\"hidden\" name=\"fotoprod\" value=\"$post->foto_makanan\">
                                                <input class=\"input100\" type=\"hidden\" name=\"namaprod\" value=\"$post->nama_makanan\">
                                                <input class=\"input100\" type=\"hidden\" name=\"hargaprod\" value=\"$post->harga_makanan\">
                                                <input class=\"input100\" type=\"hidden\" name=\"username\" value=\"$username->username\">
                                                <input class=\"btn btn-warning\" style=\"width: 110px;\" type=\"submit\" value=\"Beli\">
                                                </form>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                        </div>
                                        </div>";
                                    }
                                }
                                ?>
                            </div>
                        </div><!-- END -->

                        <div class="tab-pane fade" id="v-pills-dessert" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <?php
                                $sql = "SELECT * from dessert where id_restaurant=$id_restaurant";
                                $result = $mysqli->query($sql);
                                if ($result->num_rows) {
                                    while ($post = $result->fetch_object()) {
                                        echo "<div class=\"col-lg-6\">
                                        <div class=\"menus d-flex ftco-animate\">
                                        <div class=\"menu-img\" style=\"background-image: url($post->foto_dessert);\"></div>
                                        <div class=\"text d-flex\">
                                            <div class=\"one-half\">
                                                <h3>$post->nama_dessert</h3>
                                                <p>$post->deskripsi_dessert</p>
                                            </div>
                                            <div class=\"one-forth\">
                                                <span class=\"price\">Rp.$post->harga_dessert</span>
                                                <form method=\"GET\" action=\"cart_process.php\">
                                                <input class=\"input100\" type=\"hidden\" name=\"id_restaurant\ value=\"$id_restaurant\">
                                                <input class=\"input100\" type=\"hidden\" name=\"fotoprod\" value=\"$post->foto_dessert\">
                                                <input class=\"input100\" type=\"hidden\" name=\"namaprod\" value=\"$post->nama_dessert\">
                                                <input class=\"input100\" type=\"hidden\" name=\"hargaprod\" value=\"$post->harga_dessert\">
                                                <input class=\"input100\" type=\"hidden\" name=\"username\" value=\"$username->username\">
                                                <input class=\"btn btn-warning\" style=\"width: 110px;\" type=\"submit\" value=\"Beli\">
                                                </form>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                        </div>
                                        </div>";
                                    }
                                }
                                ?>
                            </div>
                        </div><!-- END -->

                        <div class="tab-pane fade" id="v-pills-minuman" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <?php
                                $sql = "SELECT * from minuman where id_restaurant=$id_restaurant";
                                $result = $mysqli->query($sql);
                                if ($result->num_rows) {
                                    while ($post = $result->fetch_object()) {
                                        echo "<div class=\"col-lg-6\">
                                        <div class=\"menus d-flex ftco-animate\">
                                        <div class=\"menu-img\" style=\"background-image: url($post->foto_minuman);\"></div>
                                        <div class=\"text d-flex\">
                                            <div class=\"one-half\">
                                                <h3>$post->nama_minuman</h3>
                                                <p>$post->deskripsi_minuman</p>
                                            </div>
                                            <div class=\"one-forth\">
                                                <span class=\"price\">Rp.$post->harga_minuman</span>
                                                <form method=\"GET\" action=\"cart_process.php\">
                                                <input class=\"input100\" type=\"hidden\" name=\"id_restaurant\ value=\"$id_restaurant\">
                                                <input class=\"input100\" type=\"hidden\" name=\"fotoprod\" value=\"$post->foto_minuman\">
                                                <input class=\"input100\" type=\"hidden\" name=\"namaprod\" value=\"$post->nama_minuman\">
                                                <input class=\"input100\" type=\"hidden\" name=\"hargaprod\" value=\"$post->harga_minuman\">
                                                <input class=\"input100\" type=\"hidden\" name=\"username\" value=\"$username->username\">
                                                <input class=\"btn btn-warning\" style=\"width: 110px;\" type=\"submit\" value=\"Beli\">
                                                </form>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                        </div>
                                        </div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>