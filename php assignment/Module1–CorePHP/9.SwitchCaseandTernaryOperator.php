<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programs</title>
</head>
<body>

    <!-- 1️⃣ Restaurant Food Category -->
    <h2>Restaurant Food Category</h2>
    <form method="POST">
        <label>Select a Dish:</label>
        <select name="dish">
            <option value="soup">Soup</option>
            <option value="pasta">Pasta</option>
            <option value="icecream">Ice Cream</option>
        </select>
        <input type="submit" name="food_submit" value="Check Category">
    </form>

    <?php
    if (isset($_POST['food_submit'])) {
        $dish = $_POST['dish'];
        switch ($dish) {
            case "soup":
                echo "<p>Category: Starter</p>";
                break;
            case "pasta":
                echo "<p>Category: Main Course</p>";
                break;
            case "icecream":
                echo "<p>Category: Dessert</p>";
                break;
            default:
                echo "<p>Invalid Selection</p>";
        }
    }
    ?>

    <hr>

    <!-- 2️⃣ Ternary Operator for Age Check -->
    <h2>Age Check</h2>
    <form method="POST">
        <label>Enter Your Age:</label>
        <input type="number" name="age" required>
        <input type="submit" name="age_submit" value="Check">
    </form>

    <?php
    if (isset($_POST['age_submit'])) {
        $age = $_POST['age'];
        $message = ($age > 18) ? "You are an adult." : "You are under 18.";
        echo "<p>$message</p>";
    }
    ?>

    <hr>

    <!-- 3️⃣ Color Selector -->
    <h2>Color Selector</h2>
    <form method="POST">
        <label>Enter a Color (red, green, blue):</label>
        <input type="text" name="color" required>
        <input type="submit" name="color_submit" value="Show Color">
    </form>

    <?php
    if (isset($_POST['color_submit'])) {
        $color = strtolower($_POST['color']); // Convert input to lowercase
        if (in_array($color, ["red", "green", "blue"])) {
            echo "<p>Selected Color: $color</p>";
        } else {
            echo "<p>Invalid Color</p>";
        }
    }
    ?>

</body>
</html>
