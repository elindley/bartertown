<?php 
include'inc/header.php';
include'inc/db.php';
?>
<div class="container">

	<div class="hero-unit">
		<h1>Welcome to Bartertown!</h1>
	</div>

	<div class="row">
		<p><?php include'view.php'; ?> </p>
		<div class="span4">
			<a class="btn btn-primary" href="newad.php">Make a new ad</a><br>
		</div>
		<div class="span4">
		<?php include'dropdown.php'; ?>
	</div>
	</div>


</div>

<?php include'inc/footer.php'; ?>
