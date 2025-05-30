<?php
// Show PHP errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'controllers/UserController.php';
require_once 'controllers/AdminController.php';

$page = $_GET['page'] ?? 'book_room';

switch ($page) {
    case 'book_room':
        $user = new UserController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user->bookRoom();
        }
        include 'views/user/book_room.php';
        break;

    case 'add_hotel':
        $admin = new AdminController();
        $admin->addHotel();
        break;

    case 'add_room':
        $admin = new AdminController();
        $admin->addRoom();
        break;

    case 'view_rooms':
        $admin = new AdminController();
        $admin->viewRooms();
        break;

    default:
        echo "Page not found!";
}
