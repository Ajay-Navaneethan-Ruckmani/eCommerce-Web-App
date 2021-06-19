<?php 

session_start();

$user = $_GET["username"];
$user = preg_replace('/[^a-z-Z0-9]/i', '', $user);
$password = $_GET["password"];
$password = preg_replace('/[^a-z-Z0-9]/i', '', $password);


$servername = "localhost";
$username = "root";
$password_db = "root";
$dbname = "myfirsapp";
//create connection 
$conn = new mysqli($servername, $username, $password_db, $dbname);

//check conection
if($conn->connect_error){
	die("Connection failed:". $conn->connect_error);
}

//we get mail and password dynamically from user
$sql = "SELECT user, password FROM admin where user='".$user."' and password='".$password."';";
echo $sql;

$result = $conn->query($sql);

if($result->num_rows > 0){ //?user_name=test@mail.com&pwd=password for logging in 
	while($row = $result->fetch_assoc()){
		
		$_SESSION['username'] = $_GET['username'];
		// Jump to secured page
 		header('Location: cms.php');

	}
}

else{
	echo"Login failed";
}



?>



