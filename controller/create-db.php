<?php
require_once(__DIR__ . "/../model/config.php");


$query = $_SESSION["connection"]->query("CREATE TABLE posts  ("
        . "id int(11) NOT NULL AUTO_INCREMENT," //creating id called 11
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL," //creating a new post
        . "PRIMARY KEY (id))"); // setting this as primary key
//created a query that 

if ($query) {
    echo "Succesfully created table: posts";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}