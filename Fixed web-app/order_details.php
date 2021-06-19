<?php
session_start();
$id = $_GET["id"];

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



		$sql = "SELECT `id`, `name`, `email`, `phone`, `address`, `city`, `state`, `pincode` FROM `delivery_details` WHERE id='".$id."';";
		echo '<table>';

		    foreach (mysqli_query($conn, $sql) as $row) {
		        echo '<tr><td>' . implode('</td><td>', $row) . '</td></tr>';
		    }
		echo '</table>';



?>


