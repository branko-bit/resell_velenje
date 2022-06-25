<?php
include_once 'process/db.php';
include_once 'process/admin-guard.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- meta data -->
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
    <title>Voxo - Update Product</title>

    <!-- Google font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!--Dropzon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- Bootstrap-tag input css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap-tagsinput.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="custom.scss">
    <style>
        .hidden{
            display: none;
        }
    </style>
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper start -->
    <div class="page-wrapper compact-wrapper dark-sidebar" id="pageWrapper">
        <!-- Page Header start -->
        <?php include_once 'elements/admin-header.php'?>
        <!-- Page Header end -->

        <!-- Page Body start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include_once 'elements/sidebar.php';?>
            <!-- Page Sidebar Ends-->

            <div class="page-body">
                <div class="title-header">
                    <h5>Update Product</h5>
                </div>

                <!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Product Information</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form" action="process/update-selected-product.php" method="POST">
                                                <?php
                                                include_once 'process/db.php';
                                                $p_id = $_GET['p_id'];
    	                                        $sql = "SELECT p.name, p.description, c.c_id, c.category, p.pic_link, p.price, p.size, p.stock FROM categories c INNER JOIN products p ON p.c_id = c.c_id WHERE p.p_id = $p_id";
                                                $result = mysqli_query($link, $sql);
                                                while($row = mysqli_fetch_array($result)){
                                                echo '
                                                <input type="number" value="'.$p_id.'" name="pid" class="hidden">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Product
                                                            Name</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text"
                                                                placeholder="Product Name" name="name" value="'.$row['name'].'">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-sm-2 col-form-label form-label-title">Product
                                                            Description</label>
                                                        <div class="col-sm-10">
                                                        <input class="form-control" type="text"
                                                                placeholder="Product Description" name="description" value="'.$row['description'].'">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Picture Link</label>
                                                        <div class="col-sm-10">
                                                        <input class="form-control" type="text"
                                                                placeholder="ex. shoe.jpg" name="picture-link" value="'.$row['pic_link'].'">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Price</label>
                                                        <div class="col-sm-10">
                                                        <input class="form-control" type="text"
                                                                placeholder="Product Price" name="price" value="'.$row['price'].'">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Size</label>
                                                        <div class="col-sm-10">
                                                        <input class="form-control" type="text"
                                                                placeholder="Product Size" name="size" value="'.$row['size'].'">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center mt-4">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Stock</label>
                                                        <div class="col-sm-10">
                                                        <input class="form-control" type="number"
                                                                placeholder="Product Stock" name="stock" value="'.$row['stock'].'">
                                                        </div>
                                                    </div>';}
                                                    ?>
                                                    <div class="row align-items-center ex-btn">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title"></label>
                                                        <div class="col-md-9 col-lg-4">
                                                            <input class="form-control submit-hover bold" type="submit" value="Update Product">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->

                <!-- footer Start -->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2021 © Voxo theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer En -->
            </div>
            <!-- Container-fluid End -->
        </div>
        <!-- Page Body End -->
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

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- bootstrap tag-input js -->
    <script src="assets/js/bootstrap-tagsinput.min.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!--Dropzon js -->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- ck editor js -->
    <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/ckeditor-custom.js"></script>

    <!-- select2 js -->
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/select2-custom.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>

</body>

</html>