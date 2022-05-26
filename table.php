<?php

//Uses mysql to create a table through php

//DB access information
$username = "username";
$password = "password";
$dbname = "dbname";

$connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error()); //connects to mysql server ("hostname" , "username" , "password"), or throws error if it cannot connect.

//First line is a mysql query to create a table named "users3"
//Second line creates a new field for ID that is not null and will auto increment;
//Third line sets ID to the primary key
//Fourth line creates a new field called username. varchar is the datatype. 20 is the maximum number of characters. It is not null (i.e., empty)
//etc
$sql = "CREATE TABLE users3 (
	ID int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(ID),
	Username varchar(20),
	Password varchar(20),
	FirstName varchar(20),
	LastName varchar(20)
)";

mysqli_query($connection, $sql) or die('Could not create table: ' . mysql_error()); // (mysql query, mysql connection variable). Throws error if table could not be created.
mysqli_close($connection);

?>
