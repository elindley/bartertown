<?php 
include'header.php';
include'db.php';

$body = $_POST['body'];
$email = $_POST['email'];
$title = $_POST['title'];
/*
$sql = "INSERT INTO ads SET body='$body',
		INSERT INTO ads SET title='$title',
		INSERT INTO users SET email='$email',
		SELECT users.id FROM users INNER JOIN 
		;";

*/
		
$result = @mysql_query($sql);

if($result) {
	echo('<h2 class="success">Comment submitted</h2>');
	} 
	else {
	// if it errors, send message
	 echo('<h2 class="error">Oopsies! Comment not posted.</h2>');
}

?>

<form action="index.php" method="post" id="adsubmit">
Email: <input type="text" name="email"><br>
Title: <input type="text" name="title"><br>
<textarea name="body" rows="5" cols="40"></textarea>
<input type="submit" value="Submit">
</form>

<?php include'footer.php'; ?>
