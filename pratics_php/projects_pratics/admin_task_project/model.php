<?php
class model
{
    public $conn;

    function __construct()
    {

        $this->conn = new Mysqli('localhost', 'root', '', 'zaid');
    }
    function select($table)
    {

        $select_query =   "select * from $table";

        $run = $this->conn->query($select_query);

        return $run->fetch_all(MYSQLI_ASSOC) ?? [];
    }


    function insert($table, $arr)
    {
        $columns = implode(",", array_keys($arr));

        $values = implode("','", array_values($arr));

        $query = "INSERT INTO $table($columns) VALUES ('$values')";


        $query_run = $this->conn->query($query);
        return $query_run;
    }
}


$obj = new model;
