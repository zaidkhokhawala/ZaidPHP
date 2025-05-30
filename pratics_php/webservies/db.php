<?php

$con = new mysqli('localhost', 'zaid', 'Zaid7474', 'iapl');

if ($con->connect_error) {
    die("database connect failed".$con->connect_error);
}
