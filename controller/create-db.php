<?php

require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host ,$username ,$password);

if($connection->connect_error){
die("Error: " . $connection-> connection_error);
    
}
//this selects the database file

$exists = $connection->select_db($database);
// checks if its able to connect to database
//if statement is checking if the database exists
if(!$exists) {
    echo "Database does not exists";  
}

$connection->close();