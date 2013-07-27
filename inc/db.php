<?php
$host = 'localhost';
$username = 'root';
$password = 'owningtheotter';
$database = 'bartertown';

$connect = mysql_connect($host,$username,$password) or die('<p class="error">Unable to connect to the database server at this time.</p>');
mysql_select_db($database,$connect) or die('<p class="error">Unable to connect to the database at this time.</p>');
?>
