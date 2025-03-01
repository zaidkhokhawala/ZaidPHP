<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling with PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 400px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        h2 {
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .success {
            color: green;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Contact Form</h2>
    <?php
    $name = $email = $message = "";
    $nameErr = $emailErr = $messageErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        if (empty($_POST["message"])) {
            $messageErr = "Message cannot be empty";
        } else {
            $message = htmlspecialchars($_POST["message"]);
        }

        if ($name && $email && $message) {
            echo "<p class='success'>Thank you, $name! Your message has been received.</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>

        <label for="message">Message:</label>
        <textarea name="message" id="message"><?php echo $message; ?></textarea>
        <span class="error"><?php echo $messageErr; ?></span>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
