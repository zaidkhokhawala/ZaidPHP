
<?php
session_start();
include_once('model.php');  // step 1 model load


class control extends model

{  // step 2 model class extend for model class function use


    function __construct()
    {

        model::__construct();

        $path = $_SERVER['PATH_INFO']; //http://localhost/students/7th_Jan_PHP_2025/Project/website/controller.php

        switch ($path) {

            case '/':
                include_once('index.php');
                break;

            case '/index':
                include_once('index.php');
                break;

            case '/properties':
                $property_data = $this->select('properties');
                include_once('properties.php');
                break;
            case '/property_details':
                include_once('property_details.php');
                break;


            case '/schedule_visit':

                // Step 1: Check if user is logged in
                if (!isset($_SESSION['users'])) {
                    echo "<script>alert('Please login first.'); window.location.href='login';</script>";
                    exit;
                }

                // Step 2: Get property details from URL if pid exists
                if (isset($_GET['pid'])) {
                    $pid = $_GET['pid'];
                    $property = $this->selectWhere('properties', ['id' => $pid]);

                    if (!empty($property)) {
                        $property_id = $property[0]['id'];
                        $category_name = $property[0]['category_name'];
                    }
                }

                // Step 3: On form submission
                if (isset($_POST['submit'])) {
                    $visitor_name = $_POST['name'];
                    $number = $_POST['number'];
                    $visit_date = $_POST['visit_date'];
                    $visit_time = $_POST['visit_time'];

                    $user_id = $_SESSION['users']['id'];
                    $username = $_SESSION['users']['username'];
                    $property_id = $_POST['property_id'];
                    $category_name = $_POST['category_name'];

                    $visitData = [
                        'user_id' => $user_id,
                        'username' => $username,
                        'visitor_name' => $visitor_name,
                        'property_id' => $property_id,
                        'category_name' => $category_name,
                        'visitor_number' => $number,
                        'visit_date' => $visit_date,
                        'visit_time' => $visit_time
                    ];

                    $insert = $this->insert('visit_schedule', $visitData);

                    if ($insert) {
                        echo "<script>alert('Visit booked successfully!'); window.location.href='my_visit';</script>";
                        exit;
                    } else {
                        echo "<script>alert('Failed to book visit. Try again.');</script>";
                    }
                }

                include_once('schedule_visit.php');
                break;


            case '/my_visit':
                $user_id = $_SESSION['users']['id'];

                
                $query = "SELECT vs.*, p.image AS property_image
              FROM visit_schedule vs
              JOIN properties p ON vs.property_id = p.id
              WHERE vs.user_id = '$user_id'";

                $visit_data = $this->selectCustom($query);

                include_once('my_visit.php');
                break;


            case '/login':
                if (isset($_SESSION['user'])) {
                    header("Location: index");
                    exit;
                }

                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $users = $this->selectWhere('users', ['email' => $email]);

                    if (!empty($users) && password_verify($password, $users[0]['password'])) {

                        // 👇 Store only id and username in session
                        $_SESSION['users'] = [
                            'id' => $users[0]['id'],
                            'username' => $users[0]['username']
                        ];

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
                echo "<script>alert('Logout successful'); window.location.href='index';</script>";

                break;
            case '/register':


                if (isset($_SESSION['users'])) {
                    header("Location: index");
                    exit;
                }

                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                    $exists = $this->selectWhere('users', ['email' => $email]);
                    if ($exists) {
                        echo "<script>alert('Email already registered');</script>";
                    } else {
                        $this->insert('users', [
                            'username' => $username,
                            'email' => $email,
                            'password' => $password
                        ]);
                        echo "<script>alert('Registered successfully'); window.location.href='login';</script>";
                        exit;
                    }
                }


                include_once('register.php');
                break;

            case '/contact':

                // Step 2.3: if k ander submit ki req chek karyghe agar aai hoghi to iske ander jaygha                
                if (isset($_REQUEST['submit'])) {
                    // Step 2.4: ek var lenghe alag alag input ko uske var me store karayghe 
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $message = $_REQUEST['message'];

                    // Step 2.5 ye sab var ko ek array me store kareghe 
                    $c_array = array("name" => $name, "email" => $email, "message" => $message);

                    // Step 2.5 ye array ko insert fun call karayghe jo model me bana hua h 
                    $result = $this->insert('contact', $c_array);

                    // Step 2.6 if me msg print karayghe aab model me indert ka fun banayghe

                    if ($result) {
                        echo "<script>alert('Inquiry Submitted Successfully');</script>";
                    }
                }
                include_once('contact.php');
                break;

            default:
                include_once('404page.php');
        }
    }
}
$obj = new control;
?>







