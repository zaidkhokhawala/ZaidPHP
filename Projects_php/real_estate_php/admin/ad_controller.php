<?php

session_start();
include_once('../user/model.php');

class ad_control extends model
{
    function __construct()
    {
        model::__construct();

        $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/index';




        switch ($path) {


            case '/':

                include_once('index.php');
                break;



            case '/index':


                if (isset($_SESSION['admin'])) {
                    header("Location: main");
                    exit;
                }

                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $admin = $this->selectWhere('admin', ['username' => $username]);

                    if (!empty($admin) &&  md5($password) === $admin[0]['password']) {
                        $_SESSION['admin'] = [
                            'id' => $admin[0]['id'],
                            'username' => $admin[0]['username']
                        ];

                        echo "<script>alert('Login successful'); window.location.href='main';</script>";
                        exit;
                    } else {
                        echo "<script>alert('Invalid username or password');</script>";
                    }
                }

                include('index.php');
                break;


            case '/logout':
                unset($_SESSION['admin']);
                session_destroy();

                echo "<script>window.location.href='index';</script>";
                break;

            //home page
            case '/main':

                include_once('main.php');
                break;

            //  MANAGE PRODUCT 
            case '/manage_product':

                $product_data = $this->select('properties');
                include_once('manage_product.php');
                break;

            //  ADD PRODUCT 
            case '/add_product':


                if (isset($_POST['submit'])) {
                    $category_name = $_POST['category'];
                    $price = $_POST['price'];
                    $bhk = $_POST['bhk'];
                    $area = $_POST['area'];
                    $floor = $_POST['floor'];
                    $parking = $_POST['parking'];

                    // Upload image
                    $image_name = $_FILES['property_img']['name'];
                    $image_temp_name = $_FILES['property_img']['tmp_name'];
                    $image_path = "../uploads/properties/" . $image_name;

                    if (move_uploaded_file($image_temp_name, $image_path)) {
                        $product_data = [
                            "category_name" => $category_name,
                            "price" => $price,
                            "bhk" => $bhk,
                            "area" => $area,
                            "floor" => $floor,
                            "parking" => $parking,
                            "image" => $image_name
                        ];

                        $insert_product = $this->insert('properties', $product_data);

                        if ($insert_product) {
                            echo "<script>alert('Product added successfully!');</script>";
                        } else {
                            echo "<script>alert('Error: Could not add product.');</script>";
                        }
                    } else {
                        echo "<script>alert('Image upload failed!');</script>";
                    }
                }

                $cat_arr = $this->select('categories');
                include_once('add_product.php');
                break;

            //  ADD CATEGORY 
            case '/add_category':


                if (isset($_POST['submit'])) {
                    $cat_name = $_POST['cat_name'];
                    $cat_arr = ["cat_name" => $cat_name];

                    $insert = $this->insert('categories', $cat_arr);

                    if ($insert) {
                        echo "<script>alert('Category added successfully!');</script>";
                    } else {
                        echo "<script>alert('Failed to add category.');</script>";
                    }
                }

                include_once('add_category.php');
                break;

            //  MANAGE CATEGORY 
            case '/manage_category':

                $cat_data = $this->select('categories');
                include_once('manage_category.php');
                break;

            //  MANAGE CONTACT 
            case '/manage_contact':

                $con_data = $this->select('contact');
                include_once('manage_contact.php');
                break;

            case '/manage_user':

                $user_data = $this->select('users');
                include_once('manage_user.php');
                break;

            case '/manage_visit':
                $visit_data = $this->select('visit_schedule');
                include_once('manage_visit.php');
                break;


            //  PAGE NOT FOUND 
            default:
                include_once('404page.php');
                break;
        }
    }
}

$obj = new ad_control;
