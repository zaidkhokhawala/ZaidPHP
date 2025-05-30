<?php
require_once 'config/db.php';

class Hotel {
    private $pdo;
    
    public function __construct() {
        $this->pdo = DB::connect();
    }

    public function addHotel($name, $location) {
        $stmt = $this->pdo->prepare("INSERT INTO hotels (name, location) VALUES (?, ?)");
        return $stmt->execute([$name, $location]);
    }

    public function getAllHotels() {
        $stmt = $this->pdo->query("SELECT * FROM hotels");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
