<?php

	$servername = "localhost";
	$username = "root";
	$password = "";


	$connection = mysql_connect($servername, $username, $password);

	$database = "blog"; 

	if (!$connection)
	{
		die(mysql_error());
	}

	if (!mysql_select_db($database))
	{
		die(mysql_error());
	}

?>