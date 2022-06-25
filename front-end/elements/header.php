<?php include_once 'process/db.php';?>
<header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="index.php">
                                        <img src="assets/images/logo.png" class="img-fluid blur-up lazyload" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <?php include_once 'elements/nav-bar.php'?>
                            <div class="menu-right">
                                <ul>
                                    <li class="onhover-dropdown">
                                        <div class="cart-media">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul><?php

                                                if(isset($_COOKIE['u_id'])){
                                                    $u_id = $_COOKIE['u_id'];
                                                    $sql = "SELECT username FROM `users` WHERE u_id = $u_id";
                                                    $result = mysqli_query($link, $sql);
                                                    $row = mysqli_fetch_array($result);
                                                    echo '<li>
                                                    Logged in as: <h2>'.$row['username'].'</h2>
                                                </li>
                                                <li>
                                                    <a href="process/log-out.php" class="d-block">Log Out</a>
                                                </li>';
                                                }else{
                                                    echo '
                                                    <li>
                                                    <a href="log-in.php" class="d-block">Login</a>
                                                </li>
                                                <li>
                                                    <a href="sign-up.php" class="d-block">Register</a>
                                                </li>';
                                                }
                                            ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="wishlist.php">
                                                <i data-feather="heart"></i>
                                                <?php
                                                if(isset($_COOKIE['u_id'])){
                                                    $count = 0;
                                                    $u_id = $_COOKIE['u_id'];
                                                    $sql = "SELECT w.w_id FROM `wishlist` w
                                                    INNER JOIN users u ON u.u_id = w.u_id
                                                    INNER JOIN products p ON p.p_id = w.p_id
                                                    WHERE u.u_id = $u_id";
                                                    $result = mysqli_query($link, $sql);
                                                    while($row = mysqli_fetch_array($result)){
                                                        $count = $count + 1;
                                                    }
                                                    echo '<span class="label label-theme rounded-pill">'.$count.'</span>';
                                                }else{
                                                    echo '<span class="label label-theme rounded-pill">?</span>';
                                                }
                                                ?>
                                            </a>
                                        </div>
                                        
                                    </li>
                                    <li class="onhover-dropdown cart-dropdown">
                                        <a href="cart.php">
                                        <button type="button" class="btn btn-solid-default btn-spacing">
                                            <i data-feather="shopping-cart" class="pe-2"></i>
                                            <span><?php
                                            $sum = 0;
                                            if(isset($_COOKIE['u_id'])){
                                                $sql = "SELECT r.quantity, p.p_id, p.name, p.pic_link, p.price, p.stock FROM `products` p
                                                INNER JOIN reservations r ON r.p_id = p.p_id
                                                INNER JOIN users u ON u.u_id = r.u_id
                                                WHERE u.u_id = $u_id;";
                                                $result = mysqli_query($link, $sql);
                                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    $row['price'] = $row['price'] * $row['quantity'];
                                                    $sum = $sum + $row['price'];
                                                }
                                            }
                                            echo $sum.'€'
                                            ?></span>
                                        </button></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>