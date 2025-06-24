<!DOCTYPE html>
<html>

<head>
    <title>Todo List</title>
<!-- SweetAlert2 CSS & JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap 5.3.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 5.3.3 JS Bundle (latest) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar bg-dark">
        <div class="container d-flex justify-content-between align-items-center text-white">
            <!-- Left -->
            <div class="fw-bold">
                <?php
                if (isset($_SESSION['user'])) {
                    echo 'Welcome ' . $_SESSION['user']['name'];
                } else {
                    echo 'Welcome Guest';
                }
                ?>
            </div>


            <div class="fw-bold"> <a href="index" class="text-white fw-bold">Reservation</a></div>

            <!-- Center -->
            <div>
                <h2 class="mb-0">My TODO List</h2>
            </div>

            <div class="fw-bold"> <a href="table" class="text-white fw-bold">Table</a></div>

            <!-- Right -->
            <div>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<a href="logout" class="btn btn-outline-light btn-sm">Logout</a>';
                } else {
                    echo '<a href="login" class="btn btn-outline-light btn-sm">Login</a>';
                }
                ?>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Body Content -->
    <div class="container mt-5">