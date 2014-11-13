<?php

require_once(__DIR__ . "/../model/database.php") ;

$connection = new mysqli($host, $username, $password, $database);

$title = filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING);//inputs title to user
$post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING);//inputs post to user

echo "<p> Title: $title</p>";//echos out title
echo "<p> Post: $post</p>";//echos out post

$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post' ");

if($query) {
    echo "<p> successfully inserted post: $title</p>";
}
else{
    echo "<p>$connection->error</p>";
}
$connection->close();

