<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Welcome to Bartertown</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen"></head>
    <link href="css/custom.css" rel="stylesheet" media="screen"></head>

<body>
	<div class="container">

	<!-- banner -->
	<div class="hero-unit">
		<h1>Welcome to Bartertown!</h1>
	</div>

	<!-- navigation -->
	<div class="row">
		<p class="span2"><a href="index.php">Home</a></p>
		<p class="span2"><a href="search.php?cat=2">Bikes</a></p>
		<p class="span2"><a href="search.php?cat=3">Cars</a></p>
		<p class="span2"><a href="search.php?cat=4">Trucks</a></p>
		<p class="span2"><a class="btn btn-primary" href="newad.php">Make a new ad</a>
		<form class="span2" method ="get" action="searchbar.php" id="searchform">
			<input type="text" class="span2" name="searchbar">
		</form>
	</div>
