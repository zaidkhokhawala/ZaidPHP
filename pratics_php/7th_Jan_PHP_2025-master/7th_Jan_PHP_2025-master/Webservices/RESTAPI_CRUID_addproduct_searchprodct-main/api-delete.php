<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$id = $data["id"];

require_once "dbconfig.php";

$query = "DELETE FROM api_table WHERE id='".$id."' ";

if(mysqli_query($conn, $query) or die("Delete Query Failed"))
{	
	echo json_encode(array("message" => "Product Delete Successfully", "status" => true));	
}
else
{	
	echo json_encode(array("message" => "Failed Data Not Deleted", "status" => false));	
}

?>