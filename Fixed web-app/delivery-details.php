<?php 


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myfirsapp";
//create connection 
$conn = new mysqli($servername, $username, $password, $dbname);

//check conection
if($conn->connect_error){
	die("Connection failed:". $conn->connect_error);
}else{
	//echo "Connection successfull";
}

// echo $name;
// echo $email;
// echo $phone;
// echo $address;
// echo $city;
// echo $state;
// echo $pincode;

$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$address = $_GET["address"];
$city = $_GET["city"];
$state = $_GET["state"];
$pincode= $_GET["pincode"];

$insert = mysqli_query($conn, "INSERT INTO `delivery_details`(`name`, `email`,`phone`,`address`,`city`,`state`,`pincode`) VALUES ('$name','$email','$phone','$address','$city','$state','$pincode')");

if($insert){
	echo mysqli_error();
}else{
	echo "Records added successfully";
}
 		
header('Location: order_placed.html');

mysqli_close($conn);
 ?>