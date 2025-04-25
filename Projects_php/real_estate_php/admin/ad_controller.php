
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
                    case '/add_product':
                        // Fetch categories from the database
                        $cat_arr = $this->select('categories');
                        // Include the add_product form view and pass categories_arr to it


                       // Check if the form is submitted
if (isset($_REQUEST['submit'])) {
    // Get the form data
    $product_name = $_REQUEST['product_name'];
    $category_name = $_REQUEST['category_name'];  // This is the category ID now
    $price = $_REQUEST['price'];
    $home_number = $_REQUEST['home_number'];
    $area = $_REQUEST['area'];
    $city = $_REQUEST['city'];
    $pincode = $_REQUEST['pincode'];
    $country = $_REQUEST['country'];
    $bedrooms = $_REQUEST['bedrooms'];
    $bathrooms = $_REQUEST['bathrooms'];
    $property_area = $_REQUEST['property_area'];
    $floor = $_REQUEST['floor'];
    $parking = $_REQUEST['parking'];
    
    // Image upload for the product
    $properties_img_name = $_FILES['img']['name'];
    $path = '../uploads/properties/' . $properties_img_name; // Correct path for properties images
    $temp_img_name = $_FILES['img']['tmp_name'];
    
    if (move_uploaded_file($temp_img_name, $path)) {
        // Prepare the data to insert into the 'properties' table
        $product_arr = array(
            "category_id" => $category_name, // Store category ID (not name) in the database
            "image" => $properties_img_name,  // Image name to store in the database
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
            "parking" => $parking,
            "category_name" => $product_name // Optional if you want to store the name of the product
        );

        // Insert data into the 'properties' table
        $push_insert = $this->insert('properties', $product_arr);

        // Check if insertion was successful
        if ($push_insert) {
            echo "<script>alert('Property added successfully');</script>";
        } else {
            echo "<script>alert('Failed to add property');</script>";
        }
    } else {
        echo "<script>alert('Image upload failed');</script>";
    }
}


                        include_once('add_product.php');
                        break;
                    
                 
                
                    // Include the add_product form view
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
