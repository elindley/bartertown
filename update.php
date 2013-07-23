<?php
include 'inc/db.php';

$body = mysql_real_escape_string($_POST['body']);
$title = mysql_real_escape_string($_POST['title']);
$id = mysql_real_escape_string($_POST['id']);
$query = "UPDATE ads SET body='$body', title='$title' WHERE id=$id ";

mysql_query($query);
header("Location: ad.php?id=$id");
?>