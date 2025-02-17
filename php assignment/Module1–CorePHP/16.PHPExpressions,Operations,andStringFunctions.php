<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operations</title>
</head>
<body>

    <h1>String Operations</h1>

    <!-- String Concatenation -->
    <h2>Concatenate Strings</h2>
    <form method="POST">
        <input type="text" name="str1" placeholder="Enter first string" required>
        <input type="text" name="str2" placeholder="Enter second string" required>
        <input type="submit" name="concatenate" value="Concatenate">
    </form>

    <?php
    // String Concatenation
    if (isset($_POST['concatenate'])) {
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];
        $result = $str1 . " " . $str2; // Concatenate the strings
        echo "<p>Concatenated String: " . $result . "</p>";
    }
    ?>

    <!-- Substring Extraction -->
    <h2>Substring Extraction</h2>
    <form method="POST">
        <input type="text" name="string_input" placeholder="Enter string" required>
        <input type="number" name="start_pos" placeholder="Start position" required>
        <input type="number" name="length" placeholder="Length" required>
        <input type="submit" name="substring" value="Extract Substring">
    </form>

    <?php
    // Substring Extraction
    if (isset($_POST['substring'])) {
        $string_input = $_POST['string_input'];
        $start_pos = $_POST['start_pos'];
        $length = $_POST['length'];
        $substring = substr($string_input, $start_pos, $length); // Extract substring
        echo "<p>Extracted Substring: " . $substring . "</p>";
    }
    ?>

    <!-- String Length Determination -->
    <h2>String Length</h2>
    <form method="POST">
        <input type="text" name="string_length_input" placeholder="Enter string to check length" required>
        <input type="submit" name="string_length" value="Get Length">
    </form>

    <?php
    // String Length Determination
    if (isset($_POST['string_length'])) {
        $string_length_input = $_POST['string_length_input'];
        $length = strlen($string_length_input); // Get string length
        echo "<p>Length of the String: " . $length . " characters</p>";
    }
    ?>

</body>
</html>
