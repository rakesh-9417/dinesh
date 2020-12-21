<?php 
session_start();
if(!isset($_SESSION['id']))
{
  header("Location: login.php");

}
include('conn.php');
$id = $_SESSION['id'];

$sql = "SELECT * FROM member WHERE id='$id'";
$result = mysqli_query($conn , $sql);
while($row =mysqli_fetch_array($result)){
  $current_password = $row['password'];
}
//echo  $current_password;
$msg = '1';

if(isset($_POST['submit'])){
  $new_password = $_POST['new_password'];
  $password = $_POST['password'];

  if( $password == $current_password){
    //echo "same password";
    $sql1 = "UPDATE member  SET password ='$new_password' WHERE id='$id'  ";
    $result1 = mysqli_query( $conn , $sql1);
    // echo " password Changed Successfully";
    // $msg = "password Changed Successfully" ;
    $_SESSION['msg'] = "Password Changed succesfully" ;


  }
  else{
    //echo "Entered password does not match with current password";
    $_SESSION['error_msg'] = "Password Not Changed succesfully" ;

  }


}

include('header.php'); 

?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
      class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div> 
    <?php 
    if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
   // echo $_SESSION['msg'];
      echo '<div class="alert alert-success" role="alert">
      You have Changed Password Successfully 
      </div>';
      unset($_SESSION['msg']);
    }
    ?>
    <?php 
    if(isset($_SESSION['error_msg']) && $_SESSION['error_msg'] != ''){
   // echo $_SESSION['msg'];
      echo '<div class="alert alert-danger" role="alert">
      Entered password does not match with current password 
      </div>';
      unset($_SESSION['error_msg']);
    }
    ?>
    <form method="post" action="#">
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Current password" name="password" required>
      </div>
      <div class="form-group">
        <label for="new_password">New Password:</label>
        <input type="new_password" class="form-control" id="new_password" placeholder="Enter New password" name="new_password" required>
      </div>
      <button type="submit"  name="submit" class="btn btn-primary">Change Password</button>
    </form>               
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php 
include('footer.php'); 
?>




