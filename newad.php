<?php 
include'inc/header.php';
include 'inc/db.php';
?>

<!--  form to create an ad-->
<form action="create.php" method="post" id="adsubmit">
	<select name ="category">
		<?php 
			$query = "SELECT * FROM categories;";
			$result = @mysql_query("$query");
			while ($row = mysql_fetch_array($result)) {
				echo"<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
			}
		?>
	</select><br>
	
	Email: <input type="text" name="email"><br>
	Title: <input type="text" name="title"><br>
	<textarea name="body" rows="5" cols="40"></textarea>
	<input type="submit" value="Submit">
</form>

<?php 
include'inc/footer.php'; 
?>