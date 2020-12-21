
<?php 
session_start();

include('conn.php');
$target_dir = "category/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST['submit']))

{
	$title = $_POST['title'];
	$description = $_POST['description'];
	$status = $_POST['status'];
	
	$image = $_FILES["fileToUpload"]["name"];
	echo $title; 
	echo "<br>";
	echo $desc; 
	echo "<br>";
	echo $image;

	//image upload code start
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		
	} else {
		echo "File is not an image.";
		
	}
	// Allow certain file formats
	// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	// 	&& $imageFileType != "gif" ) {
	// 	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	// }
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}

	//image upload code end

// $select = mysqli_query($conn, "SELECT `email` FROM `member` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($connectionID));
// if(mysqli_num_rows($select)) {
//     //exit('This email is already being used');
// 	$_SESSION['email_exist'] = "Email already Exist" ;
//     //exit();

// 	header("Location: index.php");
// 	die();
// }

$sql ="INSERT INTO category(title , description  , status , image ) VALUES('$title' , '$description' , '$status' ,'$image' )";
$result = mysqli_query( $conn , $sql);
if($result){
		echo "data added succesfully";
	// $_SESSION['msg'] = "data added succesfully" ;
	// header("Location: index.php");
	// 	//echo '<div class="alert alert-success" role="alert">
  //This is a success alert—check it out!
//</div>';

}
else{
	echo "data not added";
}


}

?>