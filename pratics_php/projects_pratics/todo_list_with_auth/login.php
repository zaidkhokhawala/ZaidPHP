<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title><!-- SweetAlert2 CSS & JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Login</h2>
        <form method="POST" class="col-md-6 offset-md-3 border p-4 shadow bg-white">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control rounded-pill px-4 py-2" placeholder="Enter your email..." required>

            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success w-100">Login</button>
            <div class="text-center mt-2">
                Do not have an account? <a href="register">Register</a>
            </div>
        </form>
    </div>
</body>

</html>