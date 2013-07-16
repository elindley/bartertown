<?php
include'header.php';
include'db.php';

$query = "SELECT * FROM ads;";
$result = @mysql_query("$query");
while ($row = mysql_fetch_array($result)) {
	echo($row['body'] . " " . $row['category_id'] . "<br>");
}

?>
