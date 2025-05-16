<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Exercises</title>
</head>
<body>

    <!-- 1️⃣ Display the values of an array -->
    <h2>Array Values</h2>
    <p>
        <?php
        $numbers = [10, 20, 30, 40, 50];
        echo "Array Elements: " . implode(", ", $numbers);
        ?>
    </p>

    <hr>

    <!-- 2️⃣ Find and display the number of odd and even elements in an array -->
    <h2>Count Odd and Even Numbers</h2>
    <p>
        <?php
        $arr = [10, 15, 22, 33, 40, 55, 60, 77];
        $evenCount = 0;
        $oddCount = 0;

        foreach ($arr as $num) {
            if ($num % 2 == 0) {
                $evenCount++;
            } else {
                $oddCount++;
            }
        }

        echo "Even Numbers: $evenCount<br>";
        echo "Odd Numbers: $oddCount";
        ?>
    </p>

    <hr>

    <!-- 3️⃣ Create an associative array for user details and display them -->
    <h2>User Details</h2>
    <p>
        <?php
        $user = [
            "name" => "Zaid",
            "email" => "zaid@example.com",
            "age" => 22
        ];

        foreach ($user as $key => $value) {
            echo ucfirst($key) . ": " . $value . "<br>";
        }
        ?>
    </p>

    <hr>

    <!-- 4️⃣ Shift all zero values to the bottom of an array -->
    <h2>Shift Zeros to the Bottom</h2>
    <p>
        <?php
        $arrWithZeros = [5, 0, 3, 0, 8, 0, 1, 2];
        $nonZero = [];
        $zeroCount = 0;

        foreach ($arrWithZeros as $value) {
            if ($value == 0) {
                $zeroCount++;
            } else {
                $nonZero[] = $value;
            }
        }

        // Add zeros at the end
        for ($i = 0; $i < $zeroCount; $i++) {
            $nonZero[] = 0;
        }

        echo "Updated Array: " . implode(", ", $nonZero);
        ?>
    </p>

</body>
</html>
