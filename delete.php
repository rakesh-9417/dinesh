<?php 
include('conn.php');

$id = $_GET['id'];
//echo $id;

$sql = "DELETE FROM member WHERE id ='$id'";
$result = mysqli_query($conn , $sql);
if($result){
	//echo "data deleted";
	 header("Location: member_list.php");
}
else{
	echo "data not deleted";
}

 ?>


