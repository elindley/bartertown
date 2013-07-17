<?php
include 'inc/db.php';

$body = $_POST['body'];
$email = $_POST['email'];
$title = $_POST['title'];

// receive $_POST data to be actioned on

//post body, title, and email to database and associate user id with email
/*
$sql = "INSERT INTO ads SET body='$body';
		INSERT INTO ads SET title='$title';
		INSERT INTO users SET email='$email';
		SELECT users.id, users.email, ads.user_id FROM users INNER JOIN ads ON user.id=ads.user_id;
		;";

*/
		


?>