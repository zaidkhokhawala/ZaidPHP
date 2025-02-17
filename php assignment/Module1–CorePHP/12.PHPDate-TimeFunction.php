<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Date and Time</title>
</head>
<body>

    <h2>Current Date and Time</h2>

    <?php
    // Default format (Y-m-d H:i:s)
    echo "<p>Default Format: " . date("Y-m-d H:i:s") . "</p>";

    // Custom format 1 (Day-Month-Year Hour:Minute:Second)
    echo "<p>Custom Format 1: " . date("d-M-Y H:i:s") . "</p>";

    // Custom format 2 (Full Date and Time)
    echo "<p>Custom Format 2: " . date("l, F j, Y g:i A") . "</p>";

    // Time format only (Hour:Minute AM/PM)
    echo "<p>Time Format: " . date("h:i A") . "</p>";

    // Date format only (Day-Month-Year)
    echo "<p>Date Format: " . date("d-m-Y") . "</p>";

    // ISO 8601 format
    echo "<p>ISO 8601 Format: " . date("c") . "</p>";
    ?>

</body>
</html>
