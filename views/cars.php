<?php 
include'../inc/header.php';
include '../inc/db.php';

$query = "SELECT * FROM ads WHERE category_id=3;";
$result = @mysql_query("$query");
while ($row = mysql_fetch_array($result)) {

	// create a link to ad.php with $_get argument id=ads.id
	?>
	<div class="span4">
		<a href="../ad.php?id=<?php echo($row['id']); ?>"><?php echo($row['title']); ?></a><br>
	</div>

	<?php
}
include'../inc/footer.php';
?>

