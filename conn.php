<?php 



// $conn = mysqli_connect('localhost' , 'root' , '' , 'test');

// if($conn)
// {
// 	//echo "data connected";
// }
// else{
// 	echo "data not connected";
// }

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

function abc(){
	$name = "hi rakesh";
	return $name;
	
}
 ?>