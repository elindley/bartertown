<?php
include 'inc/db.php';

$body = $_POST['body'];
$title = $_POST['title'];
$id = $_POST['id'];
$query = "UPDATE ads SET body='$body', title='$title' WHERE id=$id ";

mysql_query($query);

header("Location: ad.php?id=$id");


?>