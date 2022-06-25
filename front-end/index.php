<!--REMOVES UNVALID RESERVATIONS-->
<?php include_once 'process/remove-unvalid.php'?>
<!---->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="./manifest.json" />
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/favicon/2.png" />
    <meta name="theme-color" content="#ff0000" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Voxo" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/2.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <title>Index</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">

</head>

<body class="theme-color2 light ltr">

    <!-- header start -->
    <?php include_once 'elements/header.php'?>
    <!-- header end -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="index.php" class="active">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="toggle-category">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="cart.php">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="wishlist.php">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.php">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- home slider start -->
    <section class="home-section home-style-2 pt-0">
        <div class="container-fluid p-0">
            <div class="slick-2 dot-dark">
                <div>
                    <div class="home-slider">
                        <?php
                        $sql = "SELECT p_id, name, description ,pic_link, price, size ,stock, c.category FROM `products`
                        INNER JOIN `categories` c ON products.c_id = c.c_id;";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_array($result);
                        echo '<div class="home-wrap row m-0">
                            <div class="col-xxl-3 col-lg-4 p-0 d-lg-block d-none">
                                <div class="home-left-wrapper">
                                    <div>
                                        <h2>'.$row['name'].'</h2>

                                        <p>'.$row['description'].'</p>
                                        <h3><del>180.99€</del> <span class="theme-color">'.$row['price'].'€</span></h3>
                                        <ul class="selection-wrap">
                                            <li>
                                                <div class="dark-select">
                                                    SIZE: '.$row['size'].'
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="add-btn">
                                            <a href="cart.php" class="btn btn-white">Add to cart</a>
                                            <a href="process/add-to-wishlist.php?p_id='.$row['p_id'].'" class="btn btn-solid-default ms-2">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="share-icons">
                                            <span>share with</span>
                                            <ul class="share-icons p-0">
                                                <li>
                                                    <a target="_blank"
                                                        href="https://www.facebook.com/sharer/sharer.php?u=#url">
                                                        <img src="assets/images/social-icon/4.png"
                                                            class="img-fluid blur-up lazyload" alt="social icon">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.google.co.in/">
                                                        <img src="assets/images/social-icon/5.png"
                                                            class="img-fluid blur-up lazyload" alt="social icon">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.twitter.com/share">
                                                        <img src="assets/images/social-icon/6.png"
                                                            class="img-fluid blur-up lazyload" alt="social icon">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-9 col-lg-8 p-0 left-content">
                                <img src="assets/images/fashion/slider/nike-air-force.jpg" class="bg-img blur-up lazyload" alt="">
                                <div class="home-content row">
                                    <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-5 col-6">
                                        <h3><span class="theme-color">BIG SALE</span></h3>
                                        <h1 data-animation-in="fadeInUp" style="color: black; backdrop-filter: blur(3px); border-radius: 15px 50px 50px 5px;">New Trending Fashion
                                        </h1>
                                        <div class="discover-block" data-animation-in="fadeInUp" data-delay-in="0.7" style="backdrop-filter: blur(3px); border radius: 10px 10px 10px 10px;">
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="play-icon theme-bg-color">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                                <div class="discover-content">
                                                    <h4 class="theme-color mb-1">Discover</h4>
                                                    <h6 style="color: black">Check Out This Offer</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home slider end -->
    <!-- product section start -->
    <!-- product section end -->

    <!-- product section 2 end -->

    <!-- Banner section 3 start -->
    <section class="timer-banner-style-2">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-12">
                    <div class="discount-image-details discount-spacing">
                        <img src="../back-end/images/red-jordan.jpg" class="bg-img blur-up lazyload" alt="">

                        <div class="discunt-details" style="backdrop-filter: blur(3px); border-radius: 15px 15px 15px 15px; padding-top: 20px;">
                            <div>

                                <h5 class="mt-3"><span class="theme-color"></span></h5>
                                <h2 class="my-3 deal-text" style="color:white; backdrop-filter: blur(3px); border-radius: 15px 15px 15px 15px; padding-top: 20px;">Best deals from <span class="theme-color">
                                    <?php
                                    include_once 'process/db.php';
                                    $sql = "SELECT MIN(price) AS price FROM products";
                                    $result = mysqli_query($link, $sql);
                                    $row = mysqli_fetch_array($result);
                                    echo $row['price'];
                                    ?>
                                €</span>
                                </h2>
                                <!--<div class="timer-style-2 mt-xl-1 my-2 justify-content-center d-flex">
                                    <ul>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="days1" class="theme-color"></h2>Days
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="hours1" class="theme-color"></h2>Hour
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="minutes1" class="theme-color"></h2>Min
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div>
                                                    <h2 id="seconds1" class="theme-color"></h2>Sec
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>-->
                                <button onclick="location.href = 'shop-no-sidebar.php';" type="button"
                                    class="btn default-light-theme default-theme mt-2">Shop
                                    Now</button>

                                <!--<div class="timer-bg timer-bg-center d-lg-block d-none">
                                    <h3 class="mt-0">Latest Shoes</h3>
                                    <span>ONLY AVAILABLE HERE</span>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section 3 end -->

    <!-- instagram shop section start -->
    <section class="ratio_square">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="title title-2 text-center">
                        <h2>Instagram Shop</h2>
                        <h5 class="text-color">New Collection</h5>
                    </div>
                    <div class="product-style-1 instagram-2 product-wrapper">
                        <div class="insta-slider instagram-wrap">
                            <?php
                            $sql = "SELECT p_id, name, description ,pic_link, price, size ,stock, c.category FROM `products`
                            INNER JOIN `categories` c ON products.c_id = c.c_id;";
                            $result = mysqli_query($link, $sql);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="top-wishlist product-color">
                                            <a href="process/add-to-wishlist.php?p_id='.$row['p_id'].'" class="heart-wishlist heart-color ms-auto">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0)" class="text-center">
                                            <img src="../back-end/images/'.$row['pic_link'].'"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="insta-hover insta-spacing text-center">
                                        <div>
                                            <h5></h5>
                                            <h3 class="text-hide">'.$row['name'].' From '.$row['price'].'€</h3>
                                            <button onclick="location.href = "shop-no-sidebar.php";" type="button"
                                                class="btn btn-light-white">Shop now <i
                                                    class="fas fa-chevron-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>';}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram shop section end -->

    <!-- footer start -->
    <?php include_once 'elements/footer.php'?>
    <!-- footer end -->

    <!-- Coockie Section Start -->
    <div class="cookie-bar-section">
        <img src="assets/images/cookie.png" alt="">
        <div class="content">
            <h3>Cookies Consent</h3>
            <p class="font-light">This website use cookies to ensure you get the best experience on our website.</p>
            <div class="cookie-buttons">
                <button class="btn btn-solid-default" id="button">I understand</button>
            </div>
        </div>
    </div>
    <!-- Coockie Section End -->

    <!-- theme Setting Start -->
    <div class="theme-setting">
        <ul>
            <li>
                <button id="darkButton" class="btn btn-sm dark-buttton">Dark</button>
            </li>
            <li class="color-picker">
                <input type="color" class="form-control form-control-color" id="ColorPicker1" value="#ff0000"
                    title="Choose your color">
            </li>
        </ul>
    </div>
    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- tap to top Section End -->

    <div class="bg-overlay"></div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/feather/feather.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- newsletter js -->
    <script src="assets/js/newsletter.js"></script>

    <!-- add to cart modal resize -->
    <script src="assets/js/cart_modal_resize.js"></script>

    <!-- Add To Home js -->
    <script src="assets/js/pwa.js"></script>

    <!-- add to cart modal resize -->
    <script src="assets/js/cart_modal_resize.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/timer1.js"></script>

    <!-- notify js -->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>