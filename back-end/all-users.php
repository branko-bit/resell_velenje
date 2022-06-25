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
    <title>Voxo - All User</title>
    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- Themify icon css-->
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

        <!-- Page Body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include_once 'elements/sidebar.php';?>
            <!-- Page Sidebar Ends-->

            <!-- Container-fluid starts-->
            <div class="page-body">
                <div class="title-header title-header-1">
                    <h5>All Users</h5>
                    <form class="d-inline-flex">
                        <a href="add-new-user.php" class="align-items-center btn btn-theme">
                            <i data-feather="plus-square"></i>Add New
                        </a>
                    </form>
                </div>
                <!-- All User Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-desi">
                                            <table class="user-table table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Name</th>
                                                        <th>User ID</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Last Seen</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  
                                                    $sql = "SELECT u_id, username, email, r.role, last_seen FROM `users`
                                                    INNER JOIN `roles` r ON users.ro_id = r.ro_id;";
                                                    $result = mysqli_query($link, $sql);
                                                    while ($row = mysqli_fetch_array($result)){
                                                        if($row['last_seen'] === NULL){
                                                            $row['last_seen'] = '/';
                                                        }
                                                        echo '<tr>
                                                        <td>
                                                            
                                                            <span>
                                                                <img src="assets/images/users/1.jpg" alt="users">
                                                            </span>
                                                        </td>

                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <span class="d-block ">'.$row['username'].'</span>
                                                            </a>
                                                        </td>

                                                        <td>'.$row['u_id'].'</td>

                                                        <td>'.$row['email'].'</td>

                                                        <td class="font-primary">'.$row['role'].'</td>

                                                        <td>'.$row['last_seen'].'</td>

                                                        <td>
                                                            <ul>

                                                                <li>
                                                                    <a href="process/delete-user.php?u_id='.$row['u_id'].'">
                                                                        <span class="lnr lnr-trash"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>';
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All User Table Ends-->

                <div class="container-fluid">
                    <!-- footer start-->
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">© 2022 RESELL VELENJE | Made in Voxo Theme by Pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                    <!-- footer end-->
                </div>
            </div>
            <!-- Container-fluid end -->
        </div>
        <!-- Page Body End -->

        <!-- Modal Start -->
        <?php include_once 'elements/modal.php'?>
        <!-- Modal End -->
    </div>

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

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- all checkbox select js -->
    <script src="assets/js/checkbox-all-check.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>