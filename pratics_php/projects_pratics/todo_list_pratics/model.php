<?php

class model
{

    public $conn;
    function __construct()
    {

        $this->conn = new mysqli('localhost', 'zaid', 'Zaid7474', 'todo');
        if ($this->conn->connect_error) {
            die("connect error" . $this->conn->connect_error);
        }
    }

    function alldata($table)
    {
        $query = "SELECT * FROM $table";
        $run_query = $this->conn->query($query);
        return $run_query ? $run_query->fetch_all(MYSQLI_ASSOC) : [];
    }

    function adddata($table, $arr)
    {
        $column = implode(",", array_keys($arr));
        $value = implode("','", array_values($arr));
        $query = $this->conn->query("INSERT INTO $table ($column) VALUES ('$value')");
        return $query;
    }

    function delete($table, $column, $value)
    {
        $query = "DELETE FROM $table WHERE $column = '$value'";
        return $this->conn->query($query);
    }


    
}




































// class model {

//     public $conn;
// function __construct()
// {
//     $this->conn = new mysqli('localhost' , 'zaid' , 'Zaid7474' , 'todo');
//     if($this->conn->connect_error){
//         die("connect error ".$this->conn->connect_error);
//     }
// }

// function alldata($table)  {
//     $query="SELECT * FROM $table";
//     $run_query = $this->conn->query($query);
//     return $run_query?$run_query->fetch_all(MYSQLI_ASSOC):[];
// }

// function insertdata($table , $arr)  {
//     $column=implode("," ,array_keys($arr) );
//     $value=implode("','" , array_values($arr));
//     $run_query=$this->conn->query("INSERT INTO $table ($column) VALUES ('$value') ");
//     return $run_query;

// }

// }
