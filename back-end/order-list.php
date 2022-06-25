<?php
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
    <title>Voxo - Order List</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Linear Icon -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!-- Feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
    <!-- tap on top start-->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end-->

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

            <!-- Order section Start -->
            <div class="page-body">
                <div class="title-header">
                    <h5>Reservations List</h5>
                </div>

                <!-- Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-desi">
                                            <table class="table table-striped all-package">
                                                <thead>
                                                    <tr>
                                                        <th>Product Image</th>
                                                        <th>Username</th>
                                                        <th>Valid Until</th>
                                                        <th>Product Name</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        <th>Code</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $sql = "SELECT r.code, r.quantity, r.p_id, r.r_id, p.pic_link, u.username, r.valid_until, p.name, p.stock, p.price FROM `users` u
                                                INNER JOIN `reservations` r ON u.u_id = r.u_id
                                                INNER JOIN `products` p ON p.p_id = r.p_id;";
                                                $result = mysqli_query($link, $sql);
                                                while ($row = mysqli_fetch_array($result)){
                                                $r_id = $row['r_id'];
                                                $p_id = $row['p_id'];
                                                echo '<tbody>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <img src="images/'.$row['pic_link'].'" alt="users">
                                                            </span>
                                                        </td>

                                                        <td>'.$row['username'].'</td>

                                                        <td>'.$row['valid_until'].'</td>

                                                        <td>'.$row['name'].'</td>

                                                        <td>'.$row['quantity'].'</td>

                                                        <td>'.$row['price'].'€</td>
                                                        <td>'.$row['code'].'</td>
                                                        <td>
                                                            <ul>

                                                                <li>
                                                                    <a href="process/reservation-sold.php?r_id='.$r_id.'">
                                                                        <span class="lnr lnr-pencil"></span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="process/remove-from-reservation.php?r_id='.$r_id.'&p_id='.$p_id.'">
                                                                        <span class="lnr lnr-trash"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>';}?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table End -->

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
            </div>
            <!-- Order section End -->
        </div>
        <!-- Page Body End-->
    </div>
    <!-- page-wrapper End -->

    <!-- Modal start -->
    <?php include_once 'elements/modal.php'?>
    <!-- Modal end -->

    <!-- latest js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!-- scrollbar simplebar js -->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- all checkbox select js -->
    <script src="assets/js/checkbox-all-check.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>