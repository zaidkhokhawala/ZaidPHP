<?php
class model
{
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', 'Zaid7474', 'hotel');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function checkLogin()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: login");
            exit;
        }
    }

    function select($table)
    {
        return ($result = $this->conn->query("SELECT * FROM $table")) ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }
    function insert($table, $arr)
    {
        $columns = implode(",", array_keys($arr));

        $values = array_map(function ($value) {
            return ($value === null || $value === "") ? "NULL" : "'" . $value . "'";
        }, array_values($arr));

        $valuesStr = implode(",", $values);

        $query = $this->conn->query("INSERT INTO $table ($columns) VALUES ($valuesStr)");
        return $query;
    }


    function delete($table, $whereColumn, $whereValue)
    {

        return $this->conn->query("DELETE FROM $table WHERE $whereColumn = '$whereValue'");
    }



    function selectWhere($table, $where)
    {
        $whereArr = [];
        foreach ($where as $col => $val) {
            $whereArr[] = "$col = '$val'";
        }
        $whereStr = implode(" AND ", $whereArr);

        $sql = "SELECT * FROM $table WHERE $whereStr";
        $result = $this->conn->query($sql);

        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }


    function update($table, $data, $where)

    {
        $setArr = [];
        foreach ($data as $col => $val) {
            $setArr[] = "$col = '$val'";
        }
        $setStr = implode(", ", $setArr);

        $whereArr = [];
        foreach ($where as $col => $val) {
            $whereArr[] = "$col = '$val'";
        }
        $whereStr = implode(" AND ", $whereArr);

        $sql = "UPDATE $table SET $setStr WHERE $whereStr";
        return $this->conn->query($sql);
    }
}
