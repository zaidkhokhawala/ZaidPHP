<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect on Button Click</title>
</head>
<body>

    <h2>Click the Button to Redirect</h2>

    <!-- Form with a button to trigger the redirection -->
    <form method="POST">
        <input type="submit" name="redirect" value="Go to Example">
    </form>

    <?php
    // Check if the form button is clicked
    if (isset($_POST['redirect'])) {
        // Redirect to another page
        header("Location: https://www.example.com"); // Replace with the desired URL
        exit();
    }
    ?>

</body>
</html>
