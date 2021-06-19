<?php 

session_start();

$email = $_POST["email"];
$pwd = $_POST["password"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myfirsapp";
//create connection 
$conn = new mysqli($servername, $username, $password, $dbname);

//check conection
if($conn->connect_error){
	die("Connection failed:". $conn->connect_error);
}

//we get mail and password dynamically from user
$sql = "SELECT user_id, email, password FROM userinfo where email='".$email."' and password='".$pwd."';";
// echo $sql;

$result = $conn->query($sql);

if($result->num_rows > 0){ //?email=test@mail.com&pwd=password for logging in 
	while($row = $result->fetch_assoc()){
		$_SESSION['username'] = $_POST['email'];
		// Jump to secured page
 		header('Location: home.php');

	}
}
else{
	echo"Login failed";
}

?>


