<?php
$hostname  = "localhost";
$username   = "root";
$senhabanco = "vertrigo";
$basedados  = "crud";

$db = mysql_connect($hostname, $username, $senhabanco)
or die("MySQL Error: ". mysql_error());

mysql_select_db($basedados, $db)
or die("MySQL Error: ". mysql_error());