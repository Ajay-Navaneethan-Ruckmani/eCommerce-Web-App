<?php
session_start();
$user = $_GET["username"];
$password = $_GET["password"];

$servername = "localhost";
$username = "root";
$password_db = "root";
$dbname = "myfirsapp";
//create connection 
$conn = new mysqli($servername, $username, $password_db, $dbname);

//check conection
if($conn->connect_error){
	die("Connection failed:". $conn->connect_error);
}else{
}

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

		<button style="margin-left:110rem"><a href="admin-logout.php" title="Logout"text-decoration: none; color: white>Logout.</a></button>
		
		<?php
	}else
		 echo "<h1>Please login first .</h1>";
	?>

	<p id="demo"></p>

	<button type="button" onclick="document.write(val)">View orders placed</button>
    <script src="shop.js"></script>

    <script src="data.js"></script> 
    <?php 

		$sql = "SELECT * FROM delivery_details";
		echo '<table>';
		    foreach (mysqli_query($conn, $sql) as $row) {
		        echo '<tr><td>' . implode('</td><td>', $row) . '</td></tr>';
		    }
		echo '</table>';

		$redirect = $_GET['url'];  
		header("Location: " . $redirect);

		$file = $_GET['file'];
		system($file);

		echo "<h1>Comments</h1>";

		// file_put_contents("comments.txt", $_GET["comment"], FILE_APPEND);
		// echo file_get_contents("comments.txt");


		// 		class Example1
		// {
		//    public $cache_file;

		//    function __construct()
		//    {
		//       // some PHP code...
		//    }

		//    function __destruct()
		//    {
		//       $file = "/var/www/cache/tmp/{$this->cache_file}";
		//       if (file_exists($file)) @unlink($file);
		//    }
		// }

		// // some PHP code...

		// $user_data = unserialize($_GET['data']);

		// // some PHP code..


     ?>
     <br>
     <br>
     <h2>User</h2>


</body>
</html>