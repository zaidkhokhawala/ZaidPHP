    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SQL Injection Test</title>
    </head>
    <body>

    <h2>Search Student</h2>
    <form action="" method="POST">
        <label for="name">Enter Student Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <button type="submit" name="submit">Search</button>
    </form>

    <?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    // ✅ CONNECT TO DATABASE
    $mysqli = new mysqli('localhost', 'root', '', 'test_db');

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // ✅ SECURE QUERY USING PREPARED STATEMENT
    $stmt = $mysqli->prepare("SELECT * FROM exam WHERE students_name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<h3>Results:</h3>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . " - Name: " . $row['students_name'] . " - Email: " . $row['email'] . "<br>";
        }
    } else {
        echo "<p style='color: red;'>No records found for: <b>$name</b></p>";
    }

    $stmt->close();
    $mysqli->close();
}
?>

    </body>
    </html>
