<?php

	$servername = "localhost";
	$username = "root";
	$password = "";


	$connection = mysql_connect($servername, $username, $password);
	
    mysql_query("SET 
                  character_set_results = 'utf8', 
                  character_set_client = 'utf8', 
                  character_set_connection = 'utf8', 
                  character_set_database = 'utf8', 
                  character_set_server = 'utf8'", 
    $connection);
	
	$database = "make"; 

	if (!$connection)
	{
		die(mysql_error());
	}

	if (!mysql_select_db($database))
	{
		die(mysql_error());
	}

?>