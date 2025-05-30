<?php
require_once 'models/Hotel.php';
require_once 'models/Room.php';

class AdminController {
    public function addHotel() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $hotel = new Hotel();
            $hotel->addHotel($_POST['name'], $_POST['location']);
            echo "✅ Hotel added!";
        }
        include 'views/admin/add_hotel.php';
    }

    public function addRoom() {
        $hotel = new Hotel();
        $hotels = $hotel->getAllHotels();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $room = new Room();
            $room->addRoom($_POST['hotel_id'], $_POST['room_no'], $_POST['type'], $_POST['price']);
            echo "✅ Room added!";
        }
        include 'views/admin/add_room.php';
    }

    public function viewRooms() {
        $room = new Room();
        $rooms = $room->getAllRooms();
        include 'views/admin/view_rooms.php';
    }
}
