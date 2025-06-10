<?php
class model{
    public $conn;
    function __construct()
    {
        $this->conn = new mysqli('localhost','root','Zaid7474','todo');
        if($this->conn->connect_error){
            die("connect error ".$this->conn->connect_error);
        }

    }

    function alldata($table)  {
      return($result = $this->conn->query("select * from $table")) ? $result->fetch_all(MYSQLI_ASSOC):[];
    }

   function delete($table,$w_column,$w_value)  {
    return $this->conn->query("delete from $table where $w_column = '$w_value'");
   }
   
   function adddata($table,$arr )  {
  return $this->conn->query("insert into $table (".implode("," , array_keys($arr)).") values ('".implode("','" , array_values($arr))."')");
}}



?>