<?php 
include_once 'process/db.php';
include_once 'process/admin-guard.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Voxo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Voxo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="assets/css/ratio.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vector-map.css">

    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper dark-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include_once 'elements/admin-header.php'?>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include_once 'elements/sidebar.php';?>
            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <!-- chart caard section start -->
                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-primary border-5 border-0 card o-hidden">
                                <div class="custome-1-bg b-r-4 card-body">
                                    <div class="media align-items-center static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Number of Users</span>
                                            <h4 class="mb-0 counter">
                                            <?php
                                            $sql = "SELECT COUNT(u_id) AS NumberOfUsers FROM users";
                                            $result = mysqli_query($link, $sql);
                                            $row = mysqli_fetch_array($result);
                                            echo $row['NumberOfUsers'];
                                            ?>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-danger border-5 border-0 card o-hidden">
                                <div class=" custome-2-bg  b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Number of Products</span>
                                            <h4 class="mb-0 counter">
                                            <?php
                                            $sql = "SELECT COUNT(p_id) AS NumberOfProducts FROM products";
                                            $result = mysqli_query($link, $sql);
                                            $row = mysqli_fetch_array($result);
                                            echo $row['NumberOfProducts'];
                                            ?>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i data-feather="shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-success border-5 border-0 card o-hidden">
                                <div class=" custome-4-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Reservations Made</span>
                                            <h4 class="mb-0 counter">
                                            <?php
                                            $sql = "SELECT COUNT(r_id) AS NumberOfReservations FROM reservations";
                                            $result = mysqli_query($link, $sql);
                                            $row = mysqli_fetch_array($result);
                                            echo $row['NumberOfReservations'];
                                            ?>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i data-feather="shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- chart caard section End -->
                        <!-- Transactions start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>Value of Products</h4>
                                    </div>
                                </div>

                                <?php
                                $shoes = 0;
                                $clothes = 0;
                                $accessories = 0;
                                $puff = 0;
                                
                                //SHOES PRICES CALC START
                                $sql = "SELECT stock, price FROM `products` WHERE c_id = 1;";
                                $result = mysqli_query($link, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    $shoes = $shoes + $row['price'] * $row['stock'];
                                }
                                //CALC END

                                //CLOTHES PRICES CALC START
                                $sql = "SELECT stock, price FROM `products` WHERE c_id = 2;";
                                $result = mysqli_query($link, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    $clothes = $clothes + $row['price'] * $row['stock'];
                                }
                                //CALC END

                                //ACCESSORIES PRICES CALC START
                                $sql = "SELECT stock, price FROM `products` WHERE c_id = 3;";
                                $result = mysqli_query($link, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    $accessories = $accessories + $row['price'] * $row['stock'];
                                }
                                //CALC END

                                //PUFF calcl
                                $sql = "SELECT stock, price FROM `products` WHERE c_id = 4;";
                                $result = mysqli_query($link, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    $puff = $puff + $row['price'] * $row['stock'];
                                }
                                //CALC END
                                
                                
                                
                                echo '<div class="card-body pt-0">
                                    <div>
                                        <div class="table-responsive table-desi">
                                            <table class="user-table transactions-table table border-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="transactions-icon">
                                                                <i data-feather="dollar-sign"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Shoes</h6>
                                                                <p></p>
                                                            </div>
                                                        </td>

                                                        <td class="success">'.$shoes.'€</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-1">
                                                            <div class="transactions-icon">
                                                                <i data-feather="dollar-sign"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Clothing</h6>
                                                                <p></p>
                                                            </div>
                                                        </td>

                                                        <td class="success">'.$clothes.'€</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-2">
                                                            <div class="transactions-icon">
                                                                <i data-feather="dollar-sign"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Accessories</h6>
                                                                <p></p>
                                                            </div>
                                                        </td>

                                                        <td class="success">'.$accessories.'€</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-2">
                                                            <div class="transactions-icon">
                                                                <i data-feather="dollar-sign"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Puffs</h6>
                                                                <p></p>
                                                            </div>
                                                        </td>

                                                        <td class="success">'.$puff.'€</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>';
                                ?>
                            </div>
                        </div>
                        <!-- Transactions end-->
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    <?php include_once 'elements/modal.php'?>
    <!-- Modal End -->

    <!-- latest js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- scrollbar simplebar js -->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>

    <!-- Sidebar jquery -->
    <script src="assets/js/config.js"></script>

    <!-- tooltip init js -->
    <script src="assets/js/tooltip-init.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- Apexchar js -->
    <script src="assets/js/chart/apex-chart/apex-chart1.js"></script>
    <script src="assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="assets/js/chart/apex-chart/chart-custom1.js"></script>

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!-- ratio js -->
    <script src="assets/js/ratio.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>