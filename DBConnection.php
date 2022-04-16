<?php 

	$server="localhost";
	$user="root";
	$password="1234";
	$database="bao";
	$conn = mysqli_connect($server,$user,$password,$database);
	mysqli_query($conn,'set names "utf8"');

?>