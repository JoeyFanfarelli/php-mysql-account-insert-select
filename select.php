<?php

//Works with loginselect.php to acquire account info from the database.

//DB access information.
$username = "username";
$password = "password";
$dbname = "databasename";
$account = $_POST['account'];

//Connecting to the DB
$connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error());  //(host,username,password,DB name) Connects to mysql server. Throws error if it cannot connect.

//Finding the specific account. Limiting by 1 because we have not yet cleaned the data in the database - there may be multiple matching records.
$sql = "SELECT * FROM accounts WHERE account='".$account."' LIMIT 1";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_row($result);
		echo "Account ID: " . $row[2] . "<br>";
		echo "Name: " . $row[0] . "<br>";
		echo "Password: " . $row[1] . "<br>";
		exit();
	}else{
		echo "Account Does Not Exist";
		exit();
}



?>
