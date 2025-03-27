<?php

use Dom\Mysql;

class model{
public $conn;
 // step  1.1 ✅ Database connection ko store karne ke liye ek variable banaya

function __construct()
{
   
    $this->conn = new Mysqli('localhost', 'root', '', 'real_estate');  
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
}
 // step 1.4 // ✅ Jab bhi $obj banega, database connection automatic establish ho jayega
 // aab controller me jayghe 

$obj = new model;   
?>