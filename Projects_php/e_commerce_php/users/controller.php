
<?php

include_once('model.php');  // step 1 model load

class control extends model{  // step 2 model class extend for model class function use
	
	
	function __construct(){
		
		model::__construct();  // step 3 call model __construct for database connectivity
		
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/7th_Jan_PHP_2025/Project/website/
	
		switch($path){

			case '/':
				include_once('index.php');
			break;

			case '/index':
				include_once('index.php');
			break;
			
			case '/About_us':
				include_once('About_us.php');
			break;
			
			case '/Blog':
				include_once('Blog.php');
			break;
			
			case '/Contact_us':
				include_once('Contact_us.php');
			break;
			case '/product_list':
				include_once('product_list.php');
			break;	
		}
		
	}

}
$obj=new control;
?>