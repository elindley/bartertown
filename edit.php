<?php

// we need the ad's id and hash to be able to edit 

include'inc/db.php';
include'inc/header.php';
$hash = $_GET['hash'];
$query = "SELECT * FROM ads WHERE hash='$hash'";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
?>

<form action="update.php" method="post" id="adsubmit">
	<!-- fill out invisible form with our hash to send to update.php when we submit this -->
	<input type="hidden" name="hash" value="<?php echo $_GET['hash']; ?>"/>
	<!-- fill out invisible form with our id to send to update.php when we submit this -->
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
