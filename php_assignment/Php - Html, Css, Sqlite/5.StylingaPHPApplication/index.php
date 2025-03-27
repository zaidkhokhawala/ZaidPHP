<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css"> <!-- Linking External CSS -->
</head>
<body>

<div class="container">
    <h2>User Registration</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        if (!empty($name) && !empty($email) && !empty($password)) {
            echo "<p class='success'>Registration successful! Welcome, $name.</p>";
        } else {
            echo "<p class='error'>All fields are required!</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>
