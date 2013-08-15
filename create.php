<?php
include 'inc/db.php';

$body = mysql_real_escape_string($_POST['body']);
$email = mysql_real_escape_string($_POST['email']);
$title = mysql_real_escape_string($_POST['title']);
$category = mysql_real_escape_string($_POST['category']);
$hash = md5( rand(0, 1000));


//post body, title, and email to database and associate user id with email
$sql = "INSERT INTO ads (body, title, category_id, hash) VALUES ('$body', '$title', '$category', '$hash');";
mysql_query($sql);

header('Location: editlink.php?hash='.$hash);

?>