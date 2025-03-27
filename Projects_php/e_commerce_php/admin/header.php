<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biolife - Organic Food</title>
    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../users/assets/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="../users/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../users/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../users/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../users/assets/css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="../users/assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="../users/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./admin_style.css">

    <style>
   
</style>
</head>


<body class="biolife-body">
    <!-- Preloader start -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>
    <!-- Preloader end -->
    <header id="header" class="header-area style-01 layout-03 ">
        <div class="header-top bg-main hidden-xs "
            style="border-top: 2px solid black; 
            border-left: 2px solid black; 
            border-right: 2px solid black;  
            background: linear-gradient(to right, #e73918, rgba(176, 65, 10, 0.84), rgb(232, 39, 39), rgb(185, 57, 31), rgba(176, 65, 10, 0.84));">


            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <li><a href="#" style="font-weight: bold; font-size: 20px; ">Admin panel</a> </li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Organic@company.com</a></li>
                    </ul>
                </div>
                <div class="top-bar right ">
                    <ul class="social-list">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="horizontal-menu">
                        <li class="horz-menu-item currency">
                            <select name="currency">
                                <option value="eur">€ EUR (Euro)</option>
                                <option value="usd" selected>$ USD (Dollar)</option>
                                <option value="usd">£ GBP (Pound)</option>
                                <option value="usd">¥ JPY (Yen)</option>
                            </select>
                        </li>
                        <li class="horz-menu-item lang">
                            <select name="language">
                                <option value="fr">French (EUR)</option>
                                <option value="en" selected>English (USD)</option>
                                <option value="ger">Germany (GBP)</option>
                                <option value="jp">Japan (JPY)</option>
                            </select>
                        </li>
                        <li><a href="login.php" class="login-link"><i class="biolife-icon icon-login"></i>Login/Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white"
            style="height: 60px; 
           display: flex; 
           align-items: center; 
           background: linear-gradient(to right, #e73918, rgba(176, 65, 10, 0.84), rgb(232, 39, 39), rgb(185, 57, 31), rgba(176, 65, 10, 0.84));  
           border: 2px solid black;">

            <div class="container">
                <div class="row p">
                    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6" style="padding-top: 6px;">

                        <a href="index" class="biolife-logo"><img src="../users/assets/images/organic-3.png" alt="biolife logo" width="135" height="34"></a>
                    </div>
                    <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                        <div class="primary-menu">
                            <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                                <!-- 1 no dashboard start -->
                                <li class="menu-item"><a href="index">dashboard</a></li>                                <!-- 1 no home end -->
                               <!-- 1 no dashboard end -->
                                <!-- 2 no A/M Product start -->
                                
                                <li class="menu-item menu-item-has-children has-child">
                                    <a href="#" class="menu-name" data-title="Deals">A/M Product</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="add_product">Add Product</a></li>
                                        <li class="menu-item"><a href="manage_product">Manage Product</a></li>
                                        
                                    </ul>
                                </li>
                                <!-- 2 no A/M Product end -->
                                <!-- 3 no Customers start -->
                                <li class="menu-item menu-item-has-children has-child">
                                    <a href="#" class="menu-name" data-title="Deals">Customers</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="add_product">Contact Us</a></li>
                                        <li class="menu-item"><a href="#">Manage Customers</a></li>
                                        <li class="menu-item"><a href="#">View Feedback</a></li>

                                    </ul>
                                </li>
                                <!-- 3 no Customers end -->
                                 <!-- 4 no order start -->

                                <li class="menu-item menu-item-has-children has-child">
                                    <a href="#" class="menu-name" data-title="Deals">order</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="add_product.php">Cart Reports</a></li>
                                        <li class="menu-item"><a href="#">Manage Orders</a></li>
                                        <li class="menu-item"><a href="#">View Feedback</a></li>

                                    </ul>
                                </li>
                         
                          
                                <!-- 4 no order end -->
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                        <div class="biolife-cart-info">

                            <div class="wishlist-block hidden-sm hidden-xs">
                                <a href="#" class="link-to">
                                    <span class="icon-qty-combine">
                                        <i class="icon-heart-bold biolife-icon"></i>
                                        <span class="qty" style="  background-color: #e73918;">4</span>
                                    </span>
                                </a>
                            </div>
                            <div class="minicart-block">
                                <div class="minicart-contain">
                                    <a href="javascript:void(0)" class="link-to">
                                        <span class="icon-qty-combine">
                                            <i class="icon-cart-mini biolife-icon"></i>
                                            <span class="qty" style="  background-color: #e73918;">8</span>
                                        </span>

                                        <span class="sub-total">New order&nbsp;</span>

                                    </a>





                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>