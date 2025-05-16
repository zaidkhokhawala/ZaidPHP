<?php
session_start();
include '../config/database.php';
include '../model/bookingModel.php';

$user_id = $_SESSION['user_id'] ?? 1;
$result = getUserBookings($user_id, $conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Bookings</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Your Bookings</h2>

    <?php
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'success') {
            echo '<div class="alert alert-success text-center">Booking successful!</div>';
        } elseif ($_GET['msg'] == 'booked') {
            echo '<div class="alert alert-danger text-center">Already booked at this time!</div>';
        } elseif ($_GET['msg'] == 'error') {
            echo '<div class="alert alert-danger text-center">Something went wrong.</div>';
        }
    }
    ?>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['booking_date']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['booking_time']) . '</td>';
                    echo '<td>' . htmlspecialchars(ucfirst($row['booking_type'])) . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3" class="text-muted">No bookings found.</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
