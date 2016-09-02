<?php

	require_once('connection.php');

	session_start();

	if (count($_POST) > 0)
	{

		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);

		$result = mysql_query("SELECT * FROM users WHERE email = '". $email . "' and password = '" . $password . "' ");

		$row  = mysql_fetch_array($result);

		if(is_array($row)) 
		{
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
		} 

		else 
		{
			echo "Invalid Email or Password!";
		}

	}
	
	if (isset($_SESSION['email']))
	{
		header("Location: index.php");
	}


?>



<!DOCTYPE html>

<html>

	<head>

	<title>Вход</title>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type = "text/css" href="../CSS/blog.css">
	<link href="Logo.png" rel="shortcut icon" type="image/x-icon">
	
	<script src="JS/Blog.js"></script>
	<script src="JS/jquery-3.1.0.min.js"></script>
	
	<meta charset="UTF-8">
	
	<style type="text/css"></style>

	</head>
	
	<body background="../Pictures/Background.jpg" onload="Show()">
	
	<header>
    <div id="logout">
		<div id = "Logo" ><a target="_self" href="index.php"><img src = "../Pictures/logo.png" height=100px; width=180px;></a></div>
		<div>
		    <a id = "Gallery" href = "index.php"><b>ГАЛЕРИЯ</b></a>
			<a id = "New" href = "../New.php"><b>НОВИ</b></a>
			<a id = "Blog" href = "index.php"><b>БЛОГ</b></a>
		</div>
	</div>

</header>

<article>
		<form action = '?act=login' method = 'POST'>

			<input type = "Email" name = 'email' placeholder = "Email"><br><br>
			<input type = "Password" name = 'password' placeholder = "Password"><br><br>
			<input type = "Submit" value = 'Влез'>
		
		</form>
</article>	
<footer style="text-align:left">

<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;	&copy <b>Copyright ______ Team 2016</b>

</footer>

<script>
	function Map() {
  
      document.getElementById('map').style.display='inline';

	}
</script>
	
	</body>

</html>