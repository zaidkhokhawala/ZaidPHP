<?php
if (isset($_SESSION['admin'])) {
} else {
  echo "<script>
		alert('Login First !');
		window.location='index';
	</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>


  </style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Villa Agency - Real Estate HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="../user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../user/assets/css/fontawesome.css">
  <link rel="stylesheet" href="../user/assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="../user/assets/css/owl.css">
  <link rel="stylesheet" href="../user/assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./ad_assets/style.css">
  <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
</head>

<body>


  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4 d-flex justify-content-end align-items-center">
          <ul class="social-links d-flex align-items-center">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>


          <a href="logout" class="btn btn-sm btn-danger ms-3 px-3" style="font-size: 15px;">
            Logout
          </a>
        </div>
      </div>
    </div>
  </div>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area  header-sticky">
    <div class="container ">
      <div class="row">
        <div class="col-12 ">
          <nav class="navbar navbar-expand-lg">
            <!-- Logo -->
            <a href="index.php" class="navh1">
              <h1>
                <?php
                if (isset($_SESSION['admin'])) {
                  echo 'Welcome ' . $_SESSION['admin']['username'];
                } else {
                  echo 'Welcome Guest';
                }
                ?>
              </h1>

            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->






            <div class="collapse navbar-collapse" style="margin-left: 335px;" id="navbarNav">
              <ul class="navbar-nav gap-4">
                <li class="nav-item">
                  <a href="index" class="nav-link">Home</a>
                </li>

                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="productDropdown" data-bs-toggle="dropdown">property</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="add_product">Add property</a></li>
                    <li><a class="dropdown-item" href="manage_product">Manage property</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="categoryDropdown" data-bs-toggle="dropdown">Category</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="add_category">Add Category</a></li>
                    <li><a class="dropdown-item" href="manage_category">Manage Category</a></li>
                  </ul>
                </li>

            
                <li class="nav-item">
                  <a href="manage_user" class="nav-link">Manage User</a>
                </li>
                <li class="nav-item">
                  <a href="manage_visit" class="nav-link">Manage Visit</a>
                </li>
                <li class="nav-item">
                  <a href="manage_contact" class="nav-link">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>