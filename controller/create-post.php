<?php

require_once(__DIR__ . "/../model/config.php");

$connection = new mysqli($host, $username, $password, $database);

$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //inputs title to user
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //inputs post to user

echo "<p> Title: $title</p>"; //echos out title
echo "<p> Post: $post</p>"; //echos out post

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' "); //connects post to the query

if ($query) {
    echo "<p> successfully inserted post: $title</p>"; //if the query does exsit it will display this 
} else {
    echo "<p>" . $_SESSION["connection"]->error ."</p>"; //if the query does not exsit it will display this 
}


