
<?php

include_once('../users/model.php');  // step 1 model load


class control extends model{  // step 2 model class extend for model class function use
	
	
	function __construct(){
		
		model::__construct();  // step 3 call model __construct for database connectivity
		
		
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/7th_Jan_PHP_2025/Project/website/controller.php
	
		switch($path){

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
				$product_arr=$this->select('products');
				include_once('manage_product.php');
			break;
				
		}
		
	}

}
$obj=new control;
?>









