
<?php
class model
{
    public $conn;

    function __construct()
    {
     $this->conn = new Mysqli('localhost', 'root', 'Zaid7474', 'real_estate'); 
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

   

    function select($table)
    {
        return ($result = $this->conn->query("SELECT * FROM $table")) ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    function insert($table, $arr)
    {
        $columns = implode(",", array_keys($arr));
        $values = implode("','", array_values($arr));

        $query = $this->conn->query("INSERT INTO $table ($columns) VALUES ('$values')");
        return $query;
    }

    function delete($table, $whereColumn, $whereValue)
    {
        // Example: delete('users', 'id', 5)
        // This will run the following query:
        // DELETE FROM users WHERE id = '5'
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
    function checkAdmin()
{
    if (!isset($_SESSION['admin'])) {
        echo "<script>location.href='index';</script>";
        exit;
    }
}
function selectCustom($query) {
    $result = $this->conn->query($query);
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
}



  
}

?>






