<?php
include 'inc/db.php';

$body = $_POST['body'];
$email = $_POST['email'];
$title = $_POST['title'];
$category = $_POST['category'];


//post body, title, and email to database and associate user id with email
$sql = "INSERT INTO ads (body, title, category_id) VALUES ('$body', '$title', '$category');";
mysql_query($sql);

header('Location: index.php');

?>