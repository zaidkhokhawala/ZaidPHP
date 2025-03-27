
<?php

include_once('model.php');  // step 1 model load


class control
{  // step 2 model class extend for model class function use


    function __construct()
    {



        $path = $_SERVER['PATH_INFO']; //http://localhost/students/7th_Jan_PHP_2025/Project/website/controller.php

        switch ($path) {

            case '/':
                include_once('index.php');
                break;

            case '/index':
                include_once('index.php');
                break;

            case '/properties':
                include_once('properties.php');
                break;

            case '/property_details':
                include_once('property_details.php');
                break;
            case '/contact':
                include_once('contact.php');
                break;
                
                default : 
                include_once('404page.php');

        }
    }
}
$obj = new control;
?>







