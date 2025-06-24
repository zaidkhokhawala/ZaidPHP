<?php
session_start();
include_once('model.php');

class controller extends model
{
    function __construct()
    {
        model::__construct();

        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            // ================= AUTH ROUTES =================
            case '/':
                if (isset($_SESSION['user'])) {
                    header("Location: index");
                    exit;
                } else {
                    header("Location: login");
                    exit;
                }
                break;

            case '/register':
                if (isset($_SESSION['user'])) {
                    header("Location: index");
                    exit;
                }

                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                    $exists = $this->selectWhere('users', ['email' => $email]);
                    if ($exists) {
                        echo "<script>alert('Email already registered');</script>";
                    } else {
                        $this->insert('users', [
                            'name' => $name,
                            'email' => $email,
                            'password' => $password
                        ]);
                        echo "<script>alert('Registered successfully'); window.location.href='login';</script>";
                        exit;
                    }
                }
                include('register.php');
                break;

            case '/login':
                if (isset($_SESSION['user'])) {
                    header("Location: index");
                    exit;
                }

                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $user = $this->selectWhere('users', ['email' => $email]);
                    if (!empty($user) && password_verify($password, $user[0]['password'])) {
                        $_SESSION['user'] = $user[0];
                        echo "<script>alert('Login successful'); window.location.href='index';</script>";
                        exit;
                    } else {
                        echo "<script>alert('Invalid email or password');</script>";
                    }
                }
                include('login.php');
                break;

            case '/logout':
                session_destroy();
                echo "<script>window.location.href='login';</script>";
                break;

            // ================= PROTECTED ROUTES (Login Required) =================
            case '/index':
                $this->checkLogin();

                if (isset($_POST['submit'])) {
                    $user_id = $_SESSION['user']['id'];
                    $booking_type = $_POST['booking_type'];
                    $date = $_POST['date'] ?? null;
                    $time_from = null;
                    $time_to = null;

                    // Half day slot
                    if ($booking_type == "half_day" && !empty($_POST['half_day_slot'])) {
                        list($time_from, $time_to) = explode("-", $_POST['half_day_slot']);
                    }

                    // Custom slot
                    if ($booking_type == "custom") {
                        $time_from = $_POST['time_from'] ?? null;
                        $time_to = $_POST['time_to'] ?? null;
                    }

                    // Full day — no time slots
                    if ($booking_type == "full_day") {
                        $time_from = null;
                        $time_to = null;
                    }

                    // --- VALIDATION ---
                    $where = "user_id = '$user_id' AND date = '$date' AND booking_type = '$booking_type'";

                    if ($booking_type == "full_day") {
                        $where .= " AND time_from IS NULL AND time_to IS NULL";
                    } else {
                        $where .= " AND time_from = '$time_from' AND time_to = '$time_to'";
                    }

                    $exists = $this->conn->query("SELECT * FROM reservations WHERE $where")->num_rows;

                    if ($exists > 0) {
                        echo "<script>alert('You have already booked this slot!');</script>";
                    } else {
                        $this->insert('reservations', [
                            'user_id' => $user_id,
                            'booking_type' => $booking_type,
                            'date' => $date,
                            'time_from' => $time_from,
                            'time_to' => $time_to
                        ]);

                        echo "<script>alert('Reservation successful!');</script>";
                    }
                }

                $con_data = $this->selectWhere('users', ['id' => $_SESSION['user']['id']]);
                include('index.php');
                break;



            case '/table':
                $this->checkLogin();


                $user_id = $_SESSION['user']['id'];
                $bookings = $this->selectWhere('reservations', ['user_id' => $user_id]);

                include('table.php');
                break;


            case '/delete':
                $this->checkLogin();

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $this->delete('reservations', 'id', $id);

                    echo "<script>alert('Reservation deleted successfully'); window.location.href='table';</script>";
                    exit;
                } else {
                    echo "<script>alert('ID missing'); window.location.href='table';</script>";
                }
                break;


                case '/update_booking':
    $this->checkLogin();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Get single reservation data
        $booking_data = $this->selectWhere('reservations', ['id' => $id]);

        // Agar form submit hua hai
        if (isset($_POST['update'])) {
            $booking_type = $_POST['booking_type'];
            $date = $_POST['date'] ?? null;
            $time_from = null;
            $time_to = null;

            if ($booking_type == "half_day" && !empty($_POST['half_day_slot'])) {
                list($time_from, $time_to) = explode("-", $_POST['half_day_slot']);
            }

            if ($booking_type == "custom") {
                $time_from = $_POST['time_from'] ?? null;
                $time_to = $_POST['time_to'] ?? null;
            }

            if ($booking_type == "full_day") {
                $time_from = null;
                $time_to = null;
            }

            // Update reservation
            $this->update('reservations', [
                'booking_type' => $booking_type,
                'date' => $date,
                'time_from' => $time_from,
                'time_to' => $time_to
            ], ['id' => $id]);

            echo "<script>alert('Reservation updated successfully'); window.location.href='table';</script>";
            exit;
        }

        // Show form with prefilled data
        include('update_booking.php');
    } else {
        echo "<script>alert('Reservation ID not found'); window.location.href='table';</script>";
    }
    break;




            // ================= DEFAULT HANDLER =================
            default:
                if (!isset($_SESSION['user'])) {
                    include('login.php');
                } else {
                    header("Location: index");
                    exit;
                }
                break;
        }
    }
}

new controller();
