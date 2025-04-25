
<?php

include_once('model.php');  // step 1 model load


class control extends model

{  // step 2 model class extend for model class function use


    function __construct()
    {

      model::__construct(); 

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
                
// Step 2.3: if k ander submit ki req chek karyghe agar aai hoghi to iske ander jaygha                
if(isset($_REQUEST['submit'])){
    // Step 2.4: ek var lenghe alag alag input ko uske var me store karayghe 
   $name= $_REQUEST['name'];
   $email=$_REQUEST['email'];
   $message=$_REQUEST['message'];

// Step 2.5 ye sab var ko ek array me store kareghe 
 $c_array= array("name"=>$name,"email"=>$email,"message"=>$message);

  // Step 2.5 ye array ko insert fun call karayghe jo model me bana hua h 
    $result=$this->insert('contact',$c_array);

// Step 2.6 if me msg print karayghe aab model me indert ka fun banayghe

if ($result) {  
   echo "<script>alert('Inquiry Submitted Successfully');</script>";
}

}
                include_once('contact.php');
                break;
                
                default : 
                include_once('404page.php');

        }
    }
}
$obj = new control;
?>







