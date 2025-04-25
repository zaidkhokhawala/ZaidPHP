
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

           

            case '/manage_product':
                $product_data=$this->select('properties');
                //step 1.7  yaha ye var me data aygha ise loop me gumake print karayghe 
               
                include_once('manage_product.php');
                break;

                case '/add_product':
                $cat_data=$this->select('categories');
                    include_once('add_product.php');
                    break;

            case '/add_category':
              if (isset($_REQUEST['submit'])) {
                   $cat_name=$_REQUEST['cat_name'];
                   //img upload//
                   //step 3.1 
                   $cat_img_name=$_FILES['img']['name'];
                   $path='../uploads/categories/'.$cat_img_name;
                   $temp_img_name=$_FILES['img']['tmp_name'];
                   move_uploaded_file($temp_img_name,$path);
                  $cat_arr = array("cat_name"=>$cat_name,"cat_img"=>$cat_img_name);
                    
                  $push_insert=$this->insert('categories',$cat_arr);

                  if ($push_insert) {
                     echo "<script>alert('categories added');</script>";

                }
                }

                include_once('add_category.php');
                break;

            case '/manage_category':
                $cat_data=$this->select('categories');
                include_once('manage_category.php');
                break;


            case '/manage_contact':
                $con_data=$this->select('contact');
                include_once('manage_contact.php');
                break;

            default:
                include_once('404page.php');
        }
    }
}



$obj = new ad_control;
