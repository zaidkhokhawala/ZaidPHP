<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop Exercises</title>
    <style>
        .chessboard {
            width: 160px;
            border: 2px solid black;
        }
        .row {
            display: flex;
        }
        .box {
            width: 20px;
            height: 20px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

    <!-- 1️⃣ For Loop: Display Numbers 1 to 10 -->
    <h2>Numbers from 1 to 10</h2>
    <p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i . " ";
        }
        ?>
    </p>

    <hr>

    <!-- 2️⃣ For Loop: Addition from 0 to 30 -->
    <h2>Sum of Numbers from 0 to 30</h2>
    <p>
        <?php
        $sum = 0;
        for ($i = 0; $i <= 30; $i++) {
            $sum += $i;
        }
        echo "Total Sum: " . $sum;
        ?>
    </p>

    <hr>

    <!-- 3️⃣ Chessboard Pattern (8x8 grid) -->
    <h2>Chessboard Pattern (8x8)</h2>
    <div class="chessboard">
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo '<div class="row">';
            for ($col = 0; $col < 8; $col++) {
                $color = ($row + $col) % 2 == 0 ? "white" : "black";
                echo "<div class='box $color'></div>";
            }
            echo '</div>';
        }
        ?>
    </div>

    <hr>

    <!-- 4️⃣ Various Patterns -->
    <h2>Pattern 1: Right-Angled Triangle</h2>
    <pre>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
    ?>
    </pre>

    <h2>Pattern 2: Inverted Triangle</h2>
    <pre>
    <?php
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
    ?>
    </pre>

    <h2>Pattern 3: Pyramid</h2>
    <pre>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        // Print spaces
        for ($j = 1; $j <= 5 - $i; $j++) {
            echo "  ";
        }
        // Print stars
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "* ";
        }
        echo "\n";
    }
    ?>
    </pre>

</body>
</html>
