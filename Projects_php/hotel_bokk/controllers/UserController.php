<?php
require_once 'models/Booking.php';

class UserController {
    public function bookRoom() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $room_id = $_POST['room_id'];
            $user_id = 1; // For demo (normally from session)
            $check_in = $_POST['check_in'];
            $check_out = $_POST['check_out'];

            $booking = new Booking();
            if ($booking->isRoomAvailable($room_id, $check_in, $check_out)) {
                $booking->bookRoom($user_id, $room_id, $check_in, $check_out);
                echo "✅ Room successfully booked!";
            } else {
                echo "❌ Room already booked for selected dates!";
            }
        }
    }
}
