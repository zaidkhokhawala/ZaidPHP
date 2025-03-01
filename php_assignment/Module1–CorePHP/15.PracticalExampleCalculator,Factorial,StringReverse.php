<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical Examples</title>
</head>
<body>

    <h1>Practical Examples</h1>

    <!-- 1. Calculator -->
    <h2>Calculator</h2>
    <form method="POST">
        <input type="number" name="num1" placeholder="Number 1" required>
        <input type="number" name="num2" placeholder="Number 2" required>
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Calculator Function
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        function calculator($a, $b, $operation) {
            switch($operation) {
                case 'add':
                    return $a + $b;
                case 'subtract':
                    return $a - $b;
                case 'multiply':
                    return $a * $b;
                case 'divide':
                    return $b != 0 ? $a / $b : "Cannot divide by zero";
                default:
                    return "Invalid operation";
            }
        }
        echo "<p>Result: " . calculator($num1, $num2, $operation) . "</p>";
    }
    ?>

    <!-- 2. Factorial (Recursive Function) -->
    <h2>Factorial Calculator</h2>
    <form method="POST">
        <input type="number" name="factorial_num" placeholder="Enter number" required>
        <input type="submit" value="Calculate Factorial">
    </form>

    <?php
    // Factorial using recursion
    if (isset($_POST['factorial_num'])) {
        $num = $_POST['factorial_num'];

        function factorial($n) {
            if ($n == 0 || $n == 1) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }
        echo "<p>Factorial: " . factorial($num) . "</p>";
    }
    ?>

    <!-- 3. String Reverse -->
    <h2>Reverse a String</h2>
    <form method="POST">
        <input type="text" name="string_input" placeholder="Enter string" required>
        <input type="submit" value="Reverse String">
    </form>

    <?php
    // Reverse string without built-in function
    if (isset($_POST['string_input'])) {
        $str = $_POST['string_input'];

        function reverseString($str) {
            $reversed = '';
            $length = strlen($str);
            for ($i = $length - 1; $i >= 0; $i--) {
                $reversed .= $str[$i];
            }
            return $reversed;
        }
        echo "<p>Reversed String: " . reverseString($str) . "</p>";
    }
    ?>

    <!-- 4. Download File -->
    <h2>Download File</h2>
    <form method="POST">
        <input type="submit" name="download" value="Download File">
    </form>

    <?php
    // File download
    if (isset($_POST['download'])) {
        $file = 'example.txt'; // Replace with your file path
        if (file_exists($file)) {
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            readfile($file);
            exit();
        } else {
            echo "<p>File not found.</p>";
        }
    }
    ?>

</body>
</html>
