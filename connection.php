<?php

	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='';

	$connection_error='Couldn\'t connect to the database.Please Enter valid details.';

	$mysql_db='qwiklync';
	$con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
						
	if(!$con)
	{
		die($connection_error);
	}
	
?>