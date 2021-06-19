<?php
session_start();
?>

<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>


	<?php
	if($_SESSION["username"]) {
		?>
		
		<h1>Welcome <?php echo $_SESSION["username"]; ?>.</h1>

		<button style="margin-left:110rem"><a href="logout.php" title="Logout"text-decoration: none; color: white>Logout.</a></button>
		
		<?php
	}else
		 echo "<h1>Please login first .</h1>";
	?>

</body>
</html>