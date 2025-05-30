<?php
require_once 'config/db.php';

class Booking {
    private $pdo;

    public function __construct() {
        $this->pdo = DB::connect();
    }

    // Check room availability
    public function isRoomAvailable($room_id, $check_in, $check_out) {
        $stmt = $this->pdo->prepare("SELECT * FROM bookings WHERE room_id = ? AND (check_in <= ? AND check_out >= ?)");
        $stmt->execute([$room_id, $check_out, $check_in]);
        return $stmt->rowCount() === 0;
    }

    // Book room
    public function bookRoom($user_id, $room_id, $check_in, $check_out) {
        $stmt = $this->pdo->prepare("INSERT INTO bookings (user_id, room_id, check_in, check_out) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$user_id, $room_id, $check_in, $check_out]);
    }
}
