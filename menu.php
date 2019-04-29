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
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="menu.html" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="reservation.html" class="nav-link">Reservation</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item" id="login" style="background: #ffc107 ;border-radius: 5px"><a href="login.html" class="nav-link" style="font-weight: 500;">LOGIN</a></li>
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
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
                        <h1 class="mb-3">Jelajah menu makanan</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ftco-section-reservation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 reservation pt-5 px-5">
                    <div class="block-17">
                        <form action="" method="post" class="d-block d-lg-flex">
                            <div class="fields d-block d-lg-flex">

                                <div class="textfield-name one-third"><input type="text" class="form-control" placeholder="Name"></div>

                                <div class="textfield-phone one-third"><input type="text" class="form-control" placeholder="Phone"></div>

                                <div class="book-date one-third"><input type="text" id="book_date" class="form-control" placeholder="M/D/YYYY"></div>

                                <div class="book-time one-third">
                                    <input type="text" id="book_time" class="form-control" placeholder="Time">
                                </div>

                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Person</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4+</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" class="search-submit btn btn-primary" value="Pesan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container special-dish">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Restoran</span>
                    <h2>Restoran yang Tersedia</h2>
                </div>
            </div>
            <div class="row d-flex no-gutters">
                <div class="col-lg-6">
                    <div class="block-3 d-md-flex ftco-animate">
                        <div class="image order-last" style="background-image: url(images/restoran_seven.jpg);"></div>
                        <div class="text text-center order-first">
                            <h2 class="heading">7 Seven Chicken</h2>
                            <p>Sebuah Tempat makan dilengkapi Cafe, Co-Working, dan Meeting Room yang nyaman.</p>
                            <span class="price">Jl. Soekarno Hatta No 5, Malang</span>
                            
<!--                            Submit Button-->
                            <form action="" method="get">
                                <input style="background: #ffc107 ;border-style: none;border-radius: 5px; margin-top: 10px;font-weight: 900; color: #ffff; padding: 0.5rem 4.4rem;" type="submit" value="Pilih">
                            </form>
                        </div>
                    </div>
                    <div class="block-3 d-md-flex ftco-animate">
                        <div class="image order-first" style="background-image: url(images/restoran_mcd.jpg);"></div>
                        <div class="text text-center order-first">
                            <h2 class="heading">McDonald's</h2>
                            <p>Tempat makan yang cocok untuk kumpul keluarga dan teman</p>
                            <span class="price">Jl. MT. Haryono No 19, Malang</span>
                            
                            <!--                            Submit Button-->
                            <form action="" method="get">
                                <input style="background: #ffc107 ;border-style: none;border-radius: 5px; margin-top: 10px;font-weight: 900; color: #ffff; padding: 0.5rem 4.4rem;" type="submit" value="Pilih">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="block-3 d-md-flex ftco-animate">
                        <div class="image order-last" style="background-image: url(images/restoran_richeese.jpg);"></div>
                        <div class="text text-center order-first">
                            <h2 class="heading">Richeese Factory</h2>
                            <p>Fire Crispy Chickennya menggelegar hidupkan suasana dan balikin mood banget</p>
                            <span class="price">Jl. Idjen Boulevard No 15 A, Malang</span>
                            
                            <!--                            Submit Button-->
                            <form action="" method="get">
                                <input style="background: #ffc107 ;border-style: none;border-radius: 5px; margin-top: 10px;font-weight: 900; color: #ffff; padding: 0.5rem 4.4rem;" type="submit" value="Pilih">
                            </form>
                        </div>
                    </div>
                    <div class="block-3 d-md-flex ftco-animate">
                        <div class="image order-first" style="background-image: url(images/restoran_jogging.jpg);"></div>
                        <div class="text text-center order-first">
                            <h2 class="heading">Mie Jogging</h2>
                            <p>Setiap helai sruput mienya berasa jongging dipelaminan</p>
                            <span class="price">Jl. Sawojajar 2 No 27 Blok 9C,Malang</span>
                            
                            <!--                            Submit Button-->
                            <form action="" method="get">
                                <input style="background: #ffc107 ;border-style: none;border-radius: 5px; margin-top: 10px;font-weight: 900; color: #ffff; padding: 0.5rem 4.4rem;" type="submit" value="Pilih">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Mie Setan Gajayana</span>
                    <h2>Menu yang Tersedia</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 dish-menu">

                    <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-meat"></span> Makanan</a>
                        
                        <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-cutlery"></span> Dessert</a>
                        
                        <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span> Minuman</a>
                    </div>

                    <div class="tab-content py-5" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_makan_miesetan.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Mie Setan Angel</h3>
                                                <p><span>Mie tidak pedas</span>, <span>Siomay</span>, <span>Daging</span>, <span>Sayur</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp10000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_makan_miesetan2.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Mie Setan Jin</h3>
                                                <p><span>Mie pedas sedang</span>, <span>Siomay</span>, <span>Daging</span>, <span>Sayur</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp11000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_makan_miesetan3jpg.JPG);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Mie Setan Iblis</h3>
                                                <p><span>Mie pedas sekali</span>, <span>Siomay</span>, <span>Daging</span>, <span>Sayur</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp12000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_makan_miesetan4.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Mie Setan Iblis Sekali</h3>
                                                <p><span>Mie pedas sekali banget</span>, <span>Siomay</span>, <span>Daging</span>, <span>Sayur</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp15000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END -->

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_dessert_dimsum.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Dimsum Udang Rambutan</h3>
                                                <p><span>Udang</span>, <span>Tepung</span> </p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp8000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_dessert_dimsum2.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Dimsum Siomay</h3>
                                                <p><span>Daging</span>, <span>Udang</span>, <span>Pasta</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp8000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_dessert_dimsum3.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Dimsum Siomay Udang</h3>
                                                <p><span>Udang</span>, <span>Pasta</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp8000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_dessert_dimsum4.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Dimsum Risoles</h3>
                                                <p><span>Daging</span>, <span>Sayur</span>, <span>Mie</span>, <span>Pasta</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp8000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_dessert_dimsum5.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Dimsum Siomay Kepiting</h3>
                                                <p><span>Kepiting</span>, <span>Sayur</span>, <span>Pasta</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp8000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/menu_dessert_dimsum6.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Dimsum Siomay Udang Mahal</h3>
                                                <p><span>Udang mahal</span>, <span>Sayur</span>, <span>Pasta</span>, <span>Cinta</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp85000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END -->

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/drink-1.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Jus Lemon</h3>
                                                <p><span>Lemon Australia</span>, <span>Jeruk</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp5000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/drink-2.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Jus Jambu</h3>
                                                <p><span>Jambu Madura</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp5000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/drink-3.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Sprite</h3>
                                                <p><span>Sprite bu Rochman</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp9000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/drink-4.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Coca Cola</h3>
                                                <p><span>Sugar free Cola</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp10000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/drink-6.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Jus Apel</h3>
                                                <p><span>Apel Siiplah</span>, <span>Daun Teh</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp5000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/drink-7.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Jus Aqua</h3>
                                                <p><span>Aqua</span>, <span>Cheers</span>, <span>Club</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp5000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/drink-8.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Jus Mangga</h3>
                                                <p><span>Mangga Manalagi</span>, <span>Susu</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp9500</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menus d-flex ftco-animate">
                                        <div class="menu-img" style="background-image: url(images/drink-9.jpg);"></div>
                                        <div class="text d-flex">
                                            <div class="one-half">
                                                <h3>Jus Stroberi</h3>
                                                <p><span>Stroberi</span></p>
                                            </div>
                                            <div class="one-forth">
                                                <span class="price">Rp11000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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