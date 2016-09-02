<!DOCTYPE html>
<html>

<head> 
	<title>Blogy</title>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type = "text/css" href="../CSS/blog.css">
	<link href="Logo.png" rel="shortcut icon" type="image/x-icon">
	
	<script src="JS/Blog.js"></script>
	<script src="JS/jquery-3.1.0.min.js"></script>
	
	<meta charset="UTF-8">
	
	<style type="text/css"></style>
</head> 

<body background="../Pictures/Background.jpg" onload="setTimeout(Map, 1000);">

<header>
<?php

	session_start();

	$email = isset($_SESSION['email']);
	$password = isset($_SESSION['password']);
	
	if(!$email && !$password)
	{
		echo "<div>";
		echo "<div id = \"Logo\" ><a target=\"_self\" href=\"index.php\"><img src = \"../Pictures/logo.png\" height=100px; width=180px;></a></div>";
		echo "<div id = \"Login\" ><a href=\"login.php\" ><b>Вход</b></a></div>";
		echo "<div id = \"Login\" ><a href=\"register.php\" ><b>Регистрация</b></a></div>";
		echo "<div>";
		  echo "<a id = \"Gallery\" href = \"index.php\"><b>ГАЛЕРИЯ</b></a>";
		echo "	<a id = \"New\" href = \"../New.php\"><b>НОВИ</b></a>";
		echo "	<a id = \"New\" href = \"index.php\"><b>БЛОГ</b></a>";
		echo "</div>";
	echo "</div>";
		//echo "Welcome Guest! <br> <a href = login.php>Login</a> | <a href = register.php>Register</a>";
	}
	
	else
	{	
		//echo "Welcome ";
			echo "<div>";
		echo "<div id = \"Logo\" ><a target=\"_self\" href=\"index.php\"><img src = \"../Pictures/logo.png\" height=100px; width=180px;></a></div>";
		echo "<div id = \"Login\" ><a href=\"logout.php\" ><b>Излез</b></a></div>";
		echo "<div>";
		  echo "<a id = \"Gallery\" href = \"index.php\"><b>ГАЛЕРИЯ</b></a>";
		echo "	<a id = \"New\" href = \"../New.php\"><b>НОВИ</b></a>";
		echo "	<a id = \"New\" href = \"../Make.php\"><b>СЪЗДАЙ</b></a>";
		echo "</div>";
	echo "</div>";
		//echo "<form action=\"logout.php\" method=\"post\"><br><input type = \"Submit\" Name=\"Submit\" value = \"Logout\"></form>";
		//echo "<a href=\"settings.php\">Account</a>";
	}



?>


</header>



<main>


<article>

<img id="map" style="display: none" usemap="#worldmap" src="../Pictures/Map.png" height=70%; width=70%;>
<map name="worldmap">
  <area shape="rect" coords="150,240,330,460" href="../New.php" alt="S.America">
  <area shape="rect" coords="350,150,580,400" href="../New.php" alt="Africa">
  <area shape="rect" coords="770,280,980,430" href="../New.php" alt="Australia and Oceania">
  <area shape="rect" coords="550,20,820,240" href="../New.php" alt="Asia">
  <area shape="rect" coords="350,30,550,150" href="../New.php" alt="Europe">
  <area shape="rect" coords="30,20,350,240" href="../New.php" alt="N.America">
</map>

</article>

<footer style="text-align:left">

<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;	&copy <b>Copyright ______ Team 2016</b>

</footer>

<script>
	function Map() {
  
      document.getElementById('map').style.display='inline';

	}
</script>
</main>

</body>
</html>