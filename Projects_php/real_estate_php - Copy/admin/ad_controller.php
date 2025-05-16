
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
                    // Step 1: Fetch all categories to show in dropdown
                    $cat_data = $this->select('categories');
                
                    // Step 2: Check if form is submitted
                    if (isset($_REQUEST['submit'])) {
                        // Step 3: Collect form data
                        $category_id = $_REQUEST['category']; // Dropdown se category_id aayega
                        $price = $_REQUEST['price'];
                        $home_number = $_REQUEST['home_number'];
                        $area = $_REQUEST['area'];
                        $city = $_REQUEST['city'];
                        $pincode = $_REQUEST['pincode'];
                        $country = $_REQUEST['country'];
                        $bedrooms = $_REQUEST['bedrooms'];
                        $bathrooms = $_REQUEST['bathrooms'];
                        $property_area = $_REQUEST['property_area']; // Area in m²
                        $floor = $_REQUEST['floor'];
                        $parking = $_REQUEST['parking'];
                
                        // Step 4: Handle Image Upload (only first image)
                        $property_img_name = $_FILES['property_images']['name'][0]; // Pehla image uthaya
                        $temp_img_name = $_FILES['property_images']['tmp_name'][0];
                        $upload_path = '../uploads/properties/' . $property_img_name;
                
                        move_uploaded_file($temp_img_name, $upload_path);
                
                        // Step 5: Prepare data array for insert
                        $property_arr = array(
                            "category_id" => $category_id,
                            "category_name" => '', // Abhi blank, baad mein join se dikha sakte ho
                            "image" => $property_img_name,
                            "price" => $price,
                            "home_number" => $home_number,
                            "area" => $area,
                            "city" => $city,
                            "pincode" => $pincode,
                            "country" => $country,
                            "bedrooms" => $bedrooms,
                            "bathrooms" => $bathrooms,
                            "area_m2" => $property_area,
                            "floor" => $floor,
                            "parking" => $parking
                        );
                
                        // Step 6: Insert into database
                        $insert = $this->insert('properties', $property_arr);
                
                        // Step 7: Alert on success
                        if ($insert) {
                            echo "<script>alert('Property Added Successfully'); window.location.href='manage_product';</script>";
                        } else {
                            echo "<script>alert('Failed to Add Property');</script>";
                        }
                    }
                
                    // Step 8: Include the form page
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
