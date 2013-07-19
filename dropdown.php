<select>
<?php 
	$query = "SELECT * FROM categories;";
	$result = @mysql_query("$query");
	while ($row = mysql_fetch_array($result)) {
		echo"<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
	}
?>
</select>