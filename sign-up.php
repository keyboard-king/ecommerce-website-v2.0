<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


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
<link rel="apple-touch-icon" sizes="120x120" href="img/490072.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/490072.png">

<!-- Fontawesome -->
<link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- style CSS -->
<link type="text/css" href="./css/style.css" rel="stylesheet">

</head>


<body>
    <main>


        <!-- Section -->
        <section class="min-vh-100 d-flex align-items-center bg-soft">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="signin-inner mt-3 mt-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Create an account</h1>
                            </div>
                            <form method="POST" action="insert.php">
                                <!-- Form -->
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <label for="exampleInputIcon4">First Name</label>
                                      <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><span class="fas fa-user"></span></span>
                                          </div>
                                          <input class="form-control" name="fname" id="exampleInputIcon4" placeholder="Utkarsh" type="text" aria-label="name" required>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <label for="exampleInputIcon4">Last Name</label>
                                      <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><span class="fas fa-user"></span></span>
                                          </div>
                                          <input class="form-control" id="exampleInputIcon4" name="lname" placeholder="Bansal" type="text" aria-label="name" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIcon4">Address</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-map-marker-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputIcon4" name="address" placeholder="Address" type="text" aria-label="address" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIcon4">City</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-map-marker-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputIcon4" name="city" placeholder="City" type="text" aria-label="city" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIcon4">Pincode</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-map-marker-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputIcon4" name="pin" placeholder="Pincode" type="text" aria-label="pincode" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIcon4">Your email</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputIcon4" name="email" placeholder="example@company.com" type="text" aria-label="email adress" required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                            </div>
                                            <input class="form-control" id="password" name="pwd" placeholder="Password" type="password" aria-label="Password" required>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="passwordConfirm">Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                            </div>
                                            <input class="form-control" id="passwordConfirm" name="pwd" placeholder="Confirm password" type="password" aria-label="Password" required>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                        <label class="form-check-label" for="defaultCheck6">
                                            I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                            </form>
                            <div class="mt-3 mb-4 text-center">
                                <span class="font-weight-normal">or</span>
                            </div>
                            <div class="btn-wrapper my-4 text-center">
                                <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                                    <span aria-hidden="true" class="fab fa-facebook-f"></span>
                                </button>
                                <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                                    <span aria-hidden="true" class="fab fa-twitter"></span>
                                </button>
                                <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                                    <span aria-hidden="true" class="fab fa-github"></span>
                                </button>
                            </div>
                            <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
                                <span class="font-weight-normal">
                                    Already have an account?
                                    <a href="./sign-in.html" class="font-weight-bold">Login here</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
