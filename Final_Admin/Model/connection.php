<?php
function getConnection()
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="admin";
	$conn=new mysqli($servername, $username, $password, $dbname);
	return $conn;
}

?>