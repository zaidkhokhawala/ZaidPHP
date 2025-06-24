<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title><!-- SweetAlert2 CSS & JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4">Register</h2>
    <form method="POST" class="col-md-6 offset-md-3 border p-4 shadow bg-white">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
        <div class="text-center mt-2">
            Already have an account? <a href="login">Login</a>
        </div>
    </form>
</div>
</body>
</html>
