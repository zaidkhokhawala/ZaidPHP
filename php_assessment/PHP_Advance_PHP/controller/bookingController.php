<?php
session_start();

include '../config/database.php';
include '../model/bookingModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['booking_date'];
    $time = $_POST['booking_time'];
    $type = $_POST['booking_type'];
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;

    if (isBookingAvailable($date, $time, $conn)) {
        if (saveBooking($user_id, $date, $time, $type, $conn)) {
            header('Location: ../view/manageBookings.php?msg=success');
        } else {
            header('Location: ../view/manageBookings.php?msg=error');
        }
    } else {
        header('Location: ../view/manageBookings.php?msg=booked');
    }
}
?>
