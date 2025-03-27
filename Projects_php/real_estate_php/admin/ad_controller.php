<?php
//step 1.5 model ko load karayghe  or class me exends kareghe jisse data la sakke model mese 
include_once('../user/model.php');

class ad_control extends model
{
//step 1.6 
    function __construct()
    {


// step 1.6 call model __construct for database connectivity ye model wala __construct h 
model::__construct();  

        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/':
                include_once('index.php');
                break;

            case '/index':
                include_once('index.php');
                break;

            case '/add_product':
                include_once('add_product.php');
                break;

            case '/manage_product':
                $product_data=$this->select('properties');
                //step 1.7  yaha ye var me data aygha ise loop me gumake print karayghe 
               
                include_once('manage_product.php');
                break;

            case '/add_category':
                include_once('add_category.php');
                break;

            case '/manage_category':
                include_once('manage_category.php');
                break;

            default:
                include_once('404page.php');
        }
    }
}



$obj = new ad_control;
