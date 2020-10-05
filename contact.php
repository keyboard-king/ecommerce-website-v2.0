<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Clothes Company</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Cloth company">
<meta name="author" content="Iquest web team">
<meta name="description" content="using Open source and accessibility and Bootstrap Design System to create amazing pages.">
<meta name="keywords" content="bootstrap, Bootstrap Design System, accessiblity, open source, amazing website" />


<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="./assets/img/490072.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/490072.png">

<!-- Fontawesome -->
<link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- style CSS -->
<link type="text/css" href="./css/style.css" rel="stylesheet">

</head>


<body>
    <header class="header-global">
      <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-dark navbar-transparent">
          <div class="container position-relative">
              <a class="navbar-brand mr-lg-5" href="index.php">
                  <img class="navbar-brand-dark" src="./assets/img/490071.png" >

              </a>
              <div class="navbar-collapse .bs collapse" id="navbar_global">
                   <div class="navbar-collapse-header">
                      <div class="row">
                          <div class="col-6 collapse-brand">
                              <a href="index.php" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                  <img class="navbar-brand-dark" src="./assets/img/490071.png" >

                              </a>
                          </div>
                          <div class="col-6 collapse-close">
                              <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                          </div>
                      </div>
                  </div>
                  <ul class="navbar-nav navbar-nav-hover align-items-lg-center mr-auto">
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu" aria-expanded="false" aria-label="Toggle pages menu item">
                              <span class="nav-link-inner-text">Pages</span>
                              <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                          </a>
                          <ul class="dropdown-menu" id="pages_submenu">
                              <li><a class="dropdown-item" href="index.php">About</a></li>
                              <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                              <li><a class="dropdown-item" href="pricing.php">Pricing</a></li>
                              <li><a class="dropdown-item" href="services.php">Services</a></li>
                              <li><a class="dropdown-item" href="products.php">Products</a></li>
                              <li><a class="dropdown-item" href="orders.php">Orders</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown mega-dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="components_menu_item" aria-expanded="false" aria-label="Toggle components menu item">
                              <span class="nav-link-inner-text">Clothes</span>
                              <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                          </a>
                          <div class="dropdown-menu" id="components_menu_item">
                              <div class="row">
                                  <div class="col-lg-6 inside-bg d-none d-lg-block">
                                      <div class="justify-content-center bg-tertiary text-white">
                                          <div>
                                              <img src="./assets/img/hermes-rivera-OX_en7CXMj4-unsplash.jpg" >
                                          </div>

                                      </div>
                                  </div>
                                  <div class="col pl-0">
                                      <ul class="list-style-none">
                                          <li><a class="dropdown-item" href="pricing.php">Adidas Kampung</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Ballet Cloth</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Bast Cloth</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Blucher Cloth</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Boat Cloth</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Brothel creeper</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Bucks</a></li>

                                      </ul>
                                  </div>
                                  <div class="col pl-0">
                                      <ul class="list-style-none">
                                          <li><a class="dropdown-item" href="pricing.php">Cantabrian albarcas</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Chelsea boot</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Chopine</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Chukka boot</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Climbing Cloth</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Clog</a></li>

                                      </ul>
                                  </div>
                                  <div class="col pl-0">
                                      <ul class="list-style-none">

                                          <li><a class="dropdown-item" href="pricing.php">Derby Cloth</a> </li>
                                          <li><a class="dropdown-item" href="pricing.php">Desert Boot</a> </li>
                                          <li><a class="dropdown-item" href="pricing.php">Diabetic Cloth</a></li>
                                          <li><a class="dropdown-item" href="pricing.php">Dress Cloth</a></li>

                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="support_submenu" aria-expanded="false" aria-label="Toggle support menu item">
                              <span class="nav-link-inner-text">Support</span>
                              <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-lg" id="support_submenu">
                              <div class="col-auto px-0" data-dropdown-content>
                                  <div class="list-group list-group-flush">
                                      <a href="documentation.php" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                          <span class="icon icon-sm icon-secondary"><span class="fas fa-file-alt"></span></span>
                                          <div class="ml-4">
                                              <span class="text-dark d-block">Documentation<span class="badge badge-sm badge-secondary ml-2">v3.0</span></span>
                                              <span class="small">Examples and guides</span>
                                          </div>
                                      </a>
                                      <a href="contact.php" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                          <span class="icon icon-sm icon-primary"><span class="fas fa-microphone-alt"></span></span>
                                          <div class="ml-4">
                                              <span class="text-dark d-block">Contact US</span>
                                              <span class="small">Found an issue? Let us know!</span>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
                  <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                      <li class="nav-item dropdown">

                        <a href="cart.php" class="btn btn-tertiary animate-up-2">
                        <span class="d-none d-md-inline"></span>My Cart</a>
                        <?php

                        if(isset($_SESSION['username'])){
                          echo '
                            <a href="account.php" class="btn btn-tertiary animate-up-2 ml-md-3">
                            <span class="d-none d-md-inline"></span>My Account</a>
                          ';
                          echo '<a href="logout.php" class="btn btn-secondary ml-md-3 animate-up-2" style="border-color: #fff;">
                        <span class="fas fa-book mr-2"></span> Sign Out</a>';
                        }
                        else{
                          echo '<a href="sign-up.php" class="btn btn-tertiary animate-up-2 ml-md-3">
                          <span class="d-none d-md-inline"></span> Register</a>';
                          echo '<a href="sign-in.php" class="btn btn-secondary ml-md-3 animate-up-2 " style="border-color: #fff;">
                        <span class="fas fa-book mr-2"></span> Sign In</a>';
                      }
                      ?>

                      </li>
                    </ul>
              </div>

              <div class="d-flex align-items-center ">




                  <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

            </div>
          </div>
      </nav>
</header>
 <main>

        <!-- Hero -->
        <section class="section section-header pb-11 bg-primary text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8 text-center">
                        <h1 class="display-2 mb-3">Get in touch today</h1>
                        <p class="lead">Have a new project in mind? Drop us a line about your project needs, we answer same day.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section -->
        <div class="section py-0">
            <div class="container mt-n10">
                <div class="row">
                    <div class="col-12">

                        <iframe class="map rounded" title="map" id="gmap_canvas" src="https://maps.google.com/maps?q=vit%20university&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section -->
        <section class="section section-lg pt-6">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-6">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Contact Card -->
                        <div class="card border-0 p-2 p-md-3">
                            <div class="card-body px-0">
                                <div class="row mb-4">
                                    <div class="col-12 col-sm-4 col-md-4 text-center">
                                        <!-- Visit Box -->
                                        <div class="icon-box mb-4">
                                            <div class="icon icon-dark mb-4">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                            <h2 class="h5 icon-box-title">Visit us</h2>
                                            <span>
                                                Vit Vellore,
                                                <br>Chennai, Tamil Nadu
                                            </span>
                                        </div>
                                        <!-- End of Visit Box -->
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 text-center d-none d-md-block">
                                        <!-- Call Box -->
                                        <div class="icon-box mb-4">
                                            <div class="icon icon-dark mb-4">
                                                <span class="fas fa-phone-volume"></span>
                                            </div>
                                            <h2 class="h5 icon-box-title">Call</h2>
                                            <span>+91 7014730460</span>
                                            <div class="text-small text-gray">
                                                Mon - Fri, 8am - 4pm
                                            </div>
                                        </div>
                                        <!-- End of Call Box -->
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 text-center">
                                        <!-- Email Box -->
                                        <div class="icon-box mb-4">
                                            <div class="icon icon-dark mb-4">
                                                <span class="far fa-paper-plane"></span>
                                            </div>
                                            <h2 class="h5 icon-box-title">Email</h2>
                                            <a href="#">Utkarshbansal1009@gmail.com</a>
                                        </div>
                                        <!-- End of Email Box -->
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group mb-4">
                                        <label class="h6" for="exampleInputName1">Your Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="far fa-user"></span></span>
                                            </div>
                                            <input class="form-control" placeholder="Utkarsh Bansal" type="text" id="exampleInputName1">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="h6" for="exampleInputEmail1">Email address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="fas fa-at"></span></span>
                                            </div>
                                            <input class="form-control" placeholder="Email" type="email" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="h6" for="exampleFormControlTextarea1">Your message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="How can we help?" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-block rounded btn-secondary mt-5">Send message</button>
                                </form>
                            </div>
                        </div>
                        <!-- End of Contact Card -->
                    </div>
                </div>

            </div>
        </section>
        <!-- End of section -->
    </main>
<footer class="footer  bg-primary text-white ">
    <div class="container">
        <div class="row">
            <div class="col mb-md-0">

                <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo" style="padding-top: 35px;padding-bottom: 11px">
                    <p class="font-weight-normal font-small mb-0">Copyright © InnovatorsQuest-VIT
                        <span class="current-year">2020</span>. All rights reserved.<br> Designed by | <a href="#"> Utkarsh Bansal</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

      <!-- Core -->
<script src="./vendor/jquery/dist/jquery.min.js"></script>
<script src="./vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="./vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="./vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="./vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="./vendor/jarallax/dist/jarallax.min.js"></script>
<script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="./vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="./vendor/prismjs/prism.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- main JS -->
<script src="./assets/js/main.js"></script>
</body>

</html>
