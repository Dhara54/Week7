<?php
$hostname = "sql1.njit.edu";
$username = "dbp54";
$password = "";
$conn = NULL;
try 
{
    $conn = new PDO("mysql:host=$hostname;dbname=$username",
    $username, $password);
}
catch(PDOException $e)
{
	
	http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
	echo "Connection failed: " . $e->getMessage();
}



?>