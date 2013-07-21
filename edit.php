<?php
include'inc/db.php';
include'inc/header.php';
$query = "SELECT * FROM ads WHERE id=" . $_GET['id'];
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
?>

<form action="update.php" method="post" id="adsubmit">
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
	<select name ="category">
		<?php 
			$query = "SELECT * FROM categories;";
			$result = @mysql_query("$query");
			while ($cat = mysql_fetch_array($result)) {
				echo"<option value=" . $cat['id'] . ">" . $cat['name'] . "</option>";
			}
		?>
	</select><br>
	Title: <input type="text" name="title" value="<?php echo $row['title']; ?>"><br>
	<textarea name="body" rows="5" cols="40"><?php echo $row['body'] ?></textarea>
	<input type="submit" value="Submit">
</form>


<?php 
include'inc/footer.php'; 
?>
