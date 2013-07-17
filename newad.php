<?php 
include'inc/header.php';
?>

<!-- our form to create an ad-->
<form action="create.php" method="post" id="adsubmit">
Email: <input type="text" name="email"><br>
Title: <input type="text" name="title"><br>
<textarea name="body" rows="5" cols="40"></textarea>
<input type="submit" value="Submit">
</form>

<?php include'inc/footer.php'; ?>
