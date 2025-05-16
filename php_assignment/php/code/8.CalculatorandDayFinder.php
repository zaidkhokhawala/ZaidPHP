<?php
    $num1 = 10;  // First number
    $num2 = 5;   // Second number
    $operator = "*"; // Change operator (+, -, *, /)

    if ($operator == "+") {
        echo "Result: " . ($num1 + $num2);
    } elseif ($operator == "-") {
        echo "Result: " . ($num1 - $num2);
    } elseif ($operator == "*") {
        echo "Result: " . ($num1 * $num2);
    } elseif ($operator == "/") {
        if ($num2 != 0) {
            echo "Result: " . ($num1 / $num2);
        } else {
            echo "Cannot divide by zero!";
        }
    } else {
        echo "Invalid operator!";
    }
?>
</br>
<?php
    $day = date("l"); // Get the current day (e.g., Sunday, Monday)

    if ($day == "Sunday") {
        echo "Happy Sunday!";
    } else {
        echo "Today is $day.";
    }
?>

