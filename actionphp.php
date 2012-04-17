<?php
	$name = $_POST["name"] ;

echo $name ;

$conn = mysql_connect("localhost", "root", "mukulbiswas") ;

$dbase = mysql_select_db("mysql", $conn) ;

echo "reached so far" ;


?>
