<?php

//DB access information
$username = "username";
$password = "password";
$dbname = "databasename";

//Get information from form (logindata.html), which will be entered into db.
$user = $_POST['auser'];
$pass = $_POST['apass'];
$first = $_POST['first'];
$last = $_POST['last'];

//Connect, form query, and run query to insert account info into db.
$connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error());  //(host,username,password,DB name) Connects to mysql server. Throws error if it cannot connect.
$sql = "
INSERT INTO  users2 (Username,Password,FirstName,LastName) VALUES('$user','$pass','$first','$last')"; //Inserts data into the db, users2 table. Values correspond to fields
mysqli_query($connection, $sql); //(connection variable, query variable)

?>
