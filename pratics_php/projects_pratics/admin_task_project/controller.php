<?php
include_once('model.php');

class ad_control extends model
{
    function __construct()
    {
        model::__construct();
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/':
                include_once('index.php');
                break;

            case '/login':
                include_once('login.php');
                break;

            case '/add_product':
                if (isset($_REQUEST['submit'])) {
                    $product_name = $_REQUEST['product_name'];
                    $price = $_REQUEST['price'];
                    $category = $_REQUEST['category'];

                    $product_array = array("product_name" => $product_name, "price" => $price, "category" => $category);
                    $result = $this->insert('products', $product_array);

                    if ($result) {
                        echo "<script>alert('Product added successfully');</script>";
                        header('Location: /admin_task_project/dashboard');
                        exit();  // Always exit after a header redirect
                    } else {
                        echo "<script>alert('Product not added');</script>";
                    }
                }
                include_once('add_product.php');
                break;

            case '/dashboard':
                $product_data = $this->select('products');
                include_once('dashboard.php');
                break;

            case '/register':
                include_once('register.php');
                break;

            default:
                include_once('404page.php');
        }
    }
}

$obj = new ad_control;
?>