<?php

// 🔹 Step 1: Model class start kiya jisme database se related functions honge
class model {  
	
	public $conn;   // ✅ Database connection ko store karne ke liye ek variable banaya

	// 🔹 Step 2: Constructor function jo automatically call hota hai jab class ka object banta hai
	function __construct(){
		$this->conn = new Mysqli('localhost', 'root', '', 'store');  
		// ✅ Mysqli() ek built-in function hai jo MySQL database se connect karne ke liye use hota hai
		// "localhost" -> Server name, "root" -> Username, "" -> Password (empty), "store" -> Database name
		// Agar connection successfully establish ho jaye to $this->conn variable me store ho jayega
	}
		
	// 🔹 Step 3: SELECT function jo kisi bhi table ke sare records ko fetch karega
	function select($tbl){  
		
		$sel = "SELECT * FROM $tbl";  // ✅ SQL query likhi jo table se sare records ko select karegi
		$run = $this->conn->query($sel); // ✅ Built-in function query() jo database me SQL execute karega

		while($fetch = $run->fetch_object()) {   // ✅ fetch_object() ka use kiya taaki har row ek object ki tarah mile
			$arr[] = $fetch; // ✅ Ek empty array banaya tha, usme har row ka data store ho raha hai
		}
		return $arr;  // ✅ Final array return kar diya taaki baad me use ho sake
	}
	
	// 🔹 Step 4: Ye CRUD operations ke placeholder functions hai jo baad me implement honge
	function select_where() { } // ✅ Ye function specific conditions ke sath data fetch karega (future use)
	function insert() { }  // ✅ Ye function naye records database me insert karega (future use)
	function delete() { }  // ✅ Ye function kisi record ko delete karega (future use)
	function update() { }  // ✅ Ye function existing data ko update karega (future use)
}

// 🔹 Step 5: Model class ka object banaya jo constructor function ko automatically call karega
$obj = new model;  

?>
















