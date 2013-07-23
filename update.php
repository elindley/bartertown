<?php
include 'inc/db.php';

$body = mysql_real_escape_string($_POST['body']);
$title = mysql_real_escape_string($_POST['title']);
$hash = mysql_real_escape_string($_POST['hash']);
$id = mysql_real_escape_string($_POST['id']);

$query = "UPDATE ads SET body='$body', title='$title' WHERE hash='$hash' ";

mysql_query($query);
header("Location: ad.php?id=$id");
?>