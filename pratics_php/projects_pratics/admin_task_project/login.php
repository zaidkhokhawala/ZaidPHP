<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        body {
            background: url('https://plus.unsplash.com/premium_photo-1701069017776-1d6363816001?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8ZGFyayUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D') no-repeat center center fixed;
            background-size: cover; /* Ensures the background image covers the whole screen */
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }

        .login-container {
            width: 350px;
            margin: 100px auto;
            padding: 30px;
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent black background to make text readable */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            border-radius: 12px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #FFD700; /* Gold Color */
            background: linear-gradient(45deg, #ffd700, #ffcc00);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #6c757d;
            background: linear-gradient(45deg, #444444, #333333); /* Dark gradient background */
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .login-container input:focus {
            outline: none;
            border-color: #ffd700; /* Gold border on focus */
            background: #333333;
        }

        .login-container input:before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0));
            transform: rotate(-45deg);
            animation: shine 1.5s infinite;
        }

        @keyframes shine {
            0% {
                left: -200%;
            }
            100% {
                left: 200%;
            }
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(45deg, #ffd700, #ffcc00); /* Gold gradient */
            color: #000;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .login-container button:hover {
            background: linear-gradient(45deg, #ffb700, #ffd700); /* Lighter gold hover effect */
            transform: scale(1.05);
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
            color: #FFD700; /* Gold text */
        }

        .register-link a {
            color: #A9A9A9; /* Gray color for the link */
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
            color: #A9A9A9; /* Gray color on hover */
        }

    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="password" name="password" placeholder="Enter Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
    <div class="register-link">
        <p>Not registered yet? <a href="register.php">Register here</a></p>
    </div>
</div>

</body>
</html>
