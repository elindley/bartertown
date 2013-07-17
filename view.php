<?php
include 'inc/header.php';
include 'inc/db.php';

// display all ads and print their body and category id
$query = "SELECT * FROM ads;";
$result = @mysql_query("$query");
while ($row = mysql_fetch_array($result)) {
	echo($row['body'] . " " . $row['category_id'] . "<br>");
}
?>
