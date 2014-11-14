<?php

require_once(__DIR__ . "/../model/config.php");

$connection = new mysqli($host ,$username ,$password);

if($connection->connect_error){
die("Error: " . $connection-> connection_error);
    
}
//this selects the database file

$exists = $connection->select_db($database);
// checks if its able to connect to database
//if statement is checking if the database exists

if(!$exists) {
    $query = $connection->query("CREATE DATABASE $database"); 

//^^creating a database with a query

if($query){
    echo "successfully created database" . $database;
        }
 
   
    }

else {
    echo "Database already exsist.";
}

$query = $connection->query("CREATE TABLE posts  ("
        . "id int(11) NOT NULL AUTO_INCREMENT," //creating id called 11
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL," //creating a new post
        . "PRIMARY KEY (id))"); // setting this as primary key
//created a query that 

if($query){
    echo "Succesfully created table: posts";
}
else{
    echo "<p>$connection->error</p>";
}
    
$connection->close();