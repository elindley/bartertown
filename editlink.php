<?php 
	include'inc/header.php';
	$hash=$_GET['hash'];
	$id=$_GET['id'];
?>

<a href=<?php echo "edit.php?hash=$hash&id=$id" ?>>edit link </a>

<?php include'inc/footer.php'; ?>