<?php



class model{
public $conn;
 // step  1.1 ✅ Database connection ko store karne ke liye ek variable banaya

function __construct()
{
   
    $this->conn = new Mysqli('localhost', 'zaid', 'Zaid7474', 'real_estate');  
    // step  1.2 ✅ Mysqli() ek built-in function hai jo MySQL database se connect karne ke liye use hota hai
    // "localhost" -> Server name, "root" -> Username, "" -> Password (empty), "store" -> Database name
    // Agar connection successfully establish ho jaye to $this->conn variable me store ho jayega


}
 // step 1.3  Select function jo kisi bhi table ka pura data fetch karega                                                                                                                                                                          1.3 SELECT function jo kisi bhi table ke sare records ko fetch karega
function select($table){

   $select_query=   "select * from $table"; 
   //select ki query likhi h ye table ka sara data laygha 

   $run=$this->conn->query($select_query);
   // ye query data base me run ho gai h 

   return $run-> fetch_all(MYSQLI_ASSOC) ?? [];
  // ✅ fetch_all(MYSQLI_ASSOC) ka use kiya jo saare rows ko ek associative array me convert karega
   // ✅ MYSQLI_ASSOC ka matlab hai ki array ke andar column names honge jaise:
   //    [
   //        ["ID" => 1, "Product_Name" => "Apple", "Price" => 100],
   //        ["ID" => 2, "Product_Name" => "Banana", "Price" => 50]
   //    ]
 // ✅ ?? [] ka matlab hai agar query fail ho ya data na mile to ek empty array return ho
   
   
}

 // Step 2.6 fun banake usme table ka name jese humne contact diya h controller me or array ka name jo C_array diya h 

function insert($table,$arr){
  //2.7 column ko value data base query banane k liye filter kiya  
  $columns = implode(",", array_keys($arr)); 
  // Output: "name,email,message"

  // Yeh line values nikal rahi hai
  $values = implode("','", array_values($arr)); 
  // Output: "Zaid','zaid@gmail.com','Hello Bro"

  // Step 2.8 final query ye baneghi $query = "INSERT INTO contact(name,email,message) VALUES('Zaid','zaid@gmail.com','Hello Bro')";
  $query="INSERT INTO $table($columns) VALUES ('$values')";

  //step 2.9  Query Run karna aur Result Return karna  
 //  ye query data base me run ho gai h aab print karane k liye admin wale table me jayghe contact ke 
  $query_run=$this->conn->query($query);
  return $query_run;
}
}
 // step 1.4 // ✅ Jab bhi $obj banega, database connection automatic establish ho jayega
 // aab controller me jayghe 

$obj = new model;   
?>