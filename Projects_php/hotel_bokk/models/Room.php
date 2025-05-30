<?php
require_once 'config/db.php';

class Room {
    private $pdo;
    
    public function __construct() {
        $this->pdo = DB::connect();
    }

    public function addRoom($hotel_id, $room_no, $type, $price) {
        $stmt = $this->pdo->prepare("INSERT INTO rooms (hotel_id, room_no, type, price) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$hotel_id, $room_no, $type, $price]);
    }

    public function getAllRooms() {
        $stmt = $this->pdo->query("SELECT rooms.*, hotels.name AS hotel_name FROM rooms JOIN hotels ON rooms.hotel_id = hotels.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
