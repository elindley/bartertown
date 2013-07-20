<?php 
include'inc/header.php';
include'inc/db.php';
?>

<div class="container">

<!-- banner -->
	<div class="hero-unit">
		<h1>Welcome to Bartertown!</h1>
	</div>

<!-- new ad button -->
	<div class="row">
		<div class="span4 offset4">
			<a class="btn btn-primary" href="newad.php">Make a new ad</a><br>
		</div>
	</div>

<!-- ad titles -->
	<div class="row">
		<p><?php include'view.php'; ?> </p>
	</div>
	<br>
</div>

<?php include'inc/footer.php'; ?>
