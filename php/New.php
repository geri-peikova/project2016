<!DOCTYPE html>
<html>

<head> 
	<title>Нови публикации</title>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type = "text/css" href="CSS/blog.css">
	<link href="Logo.png" rel="shortcut icon" type="image/x-icon">
	
	<script src="JS/Blog.js"></script>
	<script src="JS/jquery-3.1.0.min.js"></script>
	
	<meta charset="UTF-8">
	
	<style type="text/css"></style>
</head> 

<body background="Pictures/Background.jpg">

<header>

   <?php
   session_start();

	$email = isset($_SESSION['email']);
	$password = isset($_SESSION['password']);
	
	if(!$email && !$password)
	{
		echo "<div>";
		echo "<div id = \"Logo\" ><a target=\"_self\" href=\"PHP/index.php\"><img src = \"Pictures/logo.png\" height=100px; width=180px;></a></div>";
		echo "<div id = \"Login\" ><a href=\"PHP/login.php\" ><b>Вход</b></a></div>";
		echo "<div id = \"Login\" ><a href=\"PHP/register.php\" ><b>Регистрация</b></a></div>";
		echo "<div>";
		  echo "<a id = \"Gallery\" href = \"PHP/index.php\"><b>ГАЛЕРИЯ</b></a>";
		echo "	<a id = \"New\" href = \"New.php\"><b>НОВИ</b></a>";
		echo "	<a id = \"New\" href = \"PHP/index.php\"><b>БЛОГ</b></a>";
		echo "</div>";
	echo "</div>";
		
	}
	
	else
	{	
		
			echo "<div>";
		echo "<div id = \"Logo\" ><a target=\"_self\" href=\"PHP/index.php\"><img src = \"Pictures/logo.png\" height=100px; width=180px;></a></div>";
		echo "<div id = \"Login\" ><a href=\"PHP/logout.php\" ><b>Излез</b></a></div>";
		echo "<div>";
		  echo "<a id = \"Gallery\" href = \"PHP/index.php\"><b>ГАЛЕРИЯ</b></a>";
		echo "	<a id = \"New\" href = \"New.php\"><b>НОВИ</b></a>";
		echo "	<a id = \"New\" href = \"Make.php\"><b>СЪЗДАЙ</b></a>";
		echo "</div>";
	echo "</div>";
	}




?>

</header>



<main>


<article>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "make";


$conn = new mysqli($servername, $username, $password, $dbname);

mysqli_set_charset($conn, 'utf8');

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, title, text FROM make";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     
     while($row = $result->fetch_assoc()) {
         echo "<div id = \"title\"><br>". $row["id"]. ".". $row["title"]. "</div><br><br><div id = \"text\"> " . $row["text"] . "</div><br><br><br><br><br>";
	 }
} else {
     echo "Няма публикации";
}

$conn->close();
?>  



</article>

<footer style="text-align:left">

<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;	&copy <b>Copyright ______ Team 2016</b>

</footer>


</script>
</main>

</body>
</html>