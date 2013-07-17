<?php
include 'inc/header.php';
// todo: display a single ad based on a given ad's id
include 'inc/db.php';
$id = $_GET['id'];
$query = "SELECT * FROM ads WHERE id=" . $id;
$response = mysql_query($query);
$ad = mysql_fetch_assoc($response);
?>
<h1><?php echo($ad['title']); ?></h1>
<p><?php echo($ad['body']); ?></p>
<?php
include 'inc/footer.php';
?>