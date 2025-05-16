
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
                    if (isset($_POST['submit'])) {
                        // Get form data
                        $category_name = $_POST['category'];
                        $price = $_POST['price'];
                        $home_number = $_POST['home_number'];
                        $area = $_POST['area'];
                        $city = $_POST['city'];
                        $pincode = $_POST['pincode'];
                        $country = $_POST['country'];
                        $bedrooms = $_POST['bedrooms'];
                        $bathrooms = $_POST['bathrooms'];
                        $property_area = $_POST['property_area'];
                        $floor = $_POST['floor'];
                        $parking = $_POST['parking'];
                        
                        // Handle image upload
                        $image_name = $_FILES['property_img']['name'];
                        $image_temp_name = $_FILES['property_img']['tmp_name'];
                        $image_path = "../uploads/properties/" . $image_name;
                        
                        // Move uploaded image to desired directory
                        if (move_uploaded_file($image_temp_name, $image_path)) {
                            // Prepare data for database insertion
                            $product_data = array(
                                "category_name" => $category_name,
                                "price" => $price,
                                "home_number" => $home_number,
                                "area" => $area,
                                "city" => $city,
                                "pincode" => $pincode,
                                "country" => $country,
                                "bedrooms" => $bedrooms,
                                "bathrooms" => $bathrooms,
                                "property_area" => $property_area,
                                "floor" => $floor,
                                "parking" => $parking,
                                "image" => $image_name
                            );
                            
                            // Insert into 'properties' table
                            $insert_product = $this->insert('properties', $product_data);
                            
                            if ($insert_product) {
                                echo "<script>alert('Product added successfully!');</script>";
                            } else {
                                echo "<script>alert('Error: Could not add product.');</script>";
                            }
                        } else {
                            echo "<script>alert('Error uploading image.');</script>";
                        }
                    }
                
                    // Fetch categories for dropdown
                    $cat_arr = $this->select('categories');
                    
                    // Include the add_product form view and pass categories data
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
