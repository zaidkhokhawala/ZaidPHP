<?php
class model
{
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', 'Zaid7474', 'todolist');
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
        return $this->conn->query("INSERT INTO $table (" . implode(",", array_keys($arr)) . ") 
        VALUES ('" . implode("','", array_values($arr)) . "')");
    }

    function delete($table, $whereColumn, $whereValue)
    {
        return $this->conn->query("DELETE FROM $table WHERE $whereColumn = '$whereValue'");
    }

    function selectWhere($table, $where)
    {
        return ($r = $this->conn->query("SELECT * FROM $table WHERE 
        " . implode(" AND ", array_map(fn($k) => "$k = '{$where[$k]}'", array_keys($where)))))
            ? $r->fetch_all(MYSQLI_ASSOC) : [];
    }

    function update($table, $data, $where)

    {
        $set = implode(", ", array_map(fn($k) => "$k = '{$data[$k]}'", array_keys($data)));
        $cond = implode(" AND ", array_map(fn($k) => "$k = '{$where[$k]}'", array_keys($where)));
        return $this->conn->query("UPDATE $table SET $set WHERE $cond");
    }
}



// <?php
// class model
// {
//     public $conn;

//     function __construct()
//     {
//         // Database connection
//         $this->conn = new mysqli('localhost', 'root', 'Zaid7474', 'todolist');
//         if ($this->conn->connect_error) {
//             die("Connection failed: " . $this->conn->connect_error);
//         }
//     }

//     function select($table)
//     {
//         $select_query = "SELECT * FROM $table";
//         $run = $this->conn->query($select_query);
//         return $run ? $run->fetch_all(MYSQLI_ASSOC) : [];

//     }

//     function insert($table, $arr)
//     {
//         $columns = implode(",", array_keys($arr));
//         $values = implode("','", array_values($arr));

//         $query = "INSERT INTO $table ($columns) VALUES ('$values')";
//         return $this->conn->query($query);



//     }


//     function delete($table, $whereColumn, $whereValue)
//     {
//         $sql = "DELETE FROM $table WHERE $whereColumn = '$whereValue'";
//         return $this->conn->query($sql);
//         return $result;

//     }



//     function selectWhere($table, $where)
//     {
//         $whereArr = [];
//         foreach ($where as $col => $val) {
//             $whereArr[] = "$col = '$val'";
//         }
//         $whereStr = implode(" AND ", $whereArr);

//         $sql = "SELECT * FROM $table WHERE $whereStr";
//         $result = $this->conn->query($sql);

//         return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];


//     }



//     function update($table, $data, $where)

//     {





//         $setArr = [];
//         foreach ($data as $col => $val) {
//             $setArr[] = "$col = '$val'";
//         }
//         $setStr = implode(", ", $setArr);

//         $whereArr = [];
//         foreach ($where as $col => $val) {
//             $whereArr[] = "$col = '$val'";
//         }
//         $whereStr = implode(" AND ", $whereArr);

//         $sql = "UPDATE $table SET $setStr WHERE $whereStr";
//         return $this->conn->query($sql);
//     }
// }
// 
