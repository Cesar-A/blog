<?php
$title = filler_input(INPUT_POST,"title",FILTER_SANITIZE_STRING);//inputs title to user
$post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING);//inputs post to user

echo "<p> Title: $title</p>";//echos out title
echo "<p> Post: $post</p>";//echos out post

