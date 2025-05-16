<?php
function isBookingAvailable($date, $time, $conn) {
    $query = "SELECT * FROM bookings WHERE booking_date = '$date' AND booking_time = '$time'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
        return true;
    } else {
        return false;
    }
}

function saveBooking($user_id, $date, $time, $type, $conn) {
    $query = "INSERT INTO bookings (user_id, booking_date, booking_time, booking_type) 
              VALUES ('$user_id', '$date', '$time', '$type')";
    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return false;
    }
}

function getUserBookings($user_id, $conn) {
    $query = "SELECT * FROM bookings WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);
    return $result;
}
?>
