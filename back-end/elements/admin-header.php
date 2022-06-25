<div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="img-fluid main-logo" src="assets/images/logo/logo.png" alt="logo">
                            <img class="img-fluid white-logo" src="assets/images/logo/logo-white.png" alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    </div>
                </div>

                <form class="form-inline search-full col" action="javascript:void(0)" method="get">
                </form>
                <div class="nav-right col-4 pull-right right-header p-0">
                    <ul class="nav-menus">
                        

                        <li>
                            <div class="mode">
                                <span class="lnr lnr-moon"></span>
                            </div>
                        </li>

                        <li class="maximize">
                            <a class="text-dark" href="javascript:void(0)!" onclick="javascript:toggleFullScreen()">
                                <span class="lnr lnr-frame-expand"></span>
                            </a>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="assets/images/users/4.jpg" alt="">
                                <div class="user-name-hide media-body">
                                    <span>
                                    <?php
                                    $u_id = $_COOKIE['u_id'];
                                    $sql = "SELECT username FROM `users` WHERE u_id = $u_id";
                                    $result = mysqli_query($link, $sql);
                                    $row = mysqli_fetch_array($result);
                                    echo $row['username'];
                                    ?>
                                    </span>
                                    <p class="mb-0 font-roboto">Admin<i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="all-users.php">
                                        <i data-feather="users"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="order-list.php">
                                        <i data-feather="archive"></i>
                                        <span>Reservations</span>
                                    </a>
                                </li>
                                <li><form action="process/log-out.php" method="POST">
                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        href="javascript:void(0)y">
                                        <i data-feather="log-out"></i>
                                        <span>Log out</span>
                                    </a></form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>