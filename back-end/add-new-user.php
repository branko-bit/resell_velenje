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
    <title>Voxo - Add New User</title>

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!--Dropzon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">

    <!-- Feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start -->
    <div class="page-wrapper compact-wrapper dark-sidebar" id="pageWrapper">
        <!-- Page Header Start -->
        <?php include_once 'elements/admin-header.php'?>
        <!-- Page Header End -->

        <!-- Page Body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include_once 'elements/sidebar.php';?>
            <!-- Page Sidebar Ends-->

            <!-- Page Sidebar Start -->
            <div class="page-body">
                <div class="title-header">
                    <h5>Add New User</h5>
                </div>
                <!-- New User start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-home"
                                                        type="button">Account</button>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form" action="process/insert-user.php" method="POST">
                                                        <div class="card-header-1">
                                                            <h5>User Information</h5>
                                                        </div>

                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">Username</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="text" name="username">
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                                    Address</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="email" name="email">
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="password" name="password">
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Confirm
                                                                    Password</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="password" name="confirm-password">
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center ex-btn">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title"></label>
                                                                <div class="col-md-9 col-lg-4">
                                                                    <input class="form-control submit-hover bold" type="submit" value="Add User">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                                    <div class="card-header-1">
                                                        <h5>Product Related Permition</h5>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Add Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Update Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Delete Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Apply Discount</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="card-header-1">
                                                        <h5>Category Related Permition</h5>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Add Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Update Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Delete Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Apply Discount</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
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
                </div>
                <!-- New User End -->

                <!-- footer start -->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer end -->
            </div>
            <!-- Page Sidebar End -->
        </div>
    </div>
    <!-- page-wrapper End -->

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

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!-- Sidebar js-->
    <script src="assets/js/config.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!--Dropzon js -->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>