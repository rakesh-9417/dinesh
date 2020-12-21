<?php 
session_start();
if(!isset($_SESSION['id']))
{
  header("Location: login.php");

}
include('conn.php');
//include('conn.php');

$id = $_GET['id'];
//echo $id;
if(isset($_POST['submit']))

{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  

  $sql1 = "UPDATE member  SET firstname='$firstname' , lastname='$lastname' ,email='$email' WHERE id='$id'  ";
  $result1 = mysqli_query( $conn , $sql1);
  if($result1){
    //echo "data Editted succesfully";
    //$_SESSION = "data added succesfully" ;
    $_SESSION['msg'] = "data Editted succesfully" ;

  }
  else{
    echo "data not Editted";
  }
  
  
}

include('header.php'); 

?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Details</h1>
   <!--  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
      class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div> 
    <?php 
    if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
   // echo $_SESSION['msg'];
      echo '<div class="alert alert-success" role="alert">
      You have Updated Details Successfully 
      </div>';
      unset($_SESSION['msg']);
    }
    ?>
    <form method="post" action="#">
      <?php 
      $sql = "SELECT * FROM member WHERE id='$id'";
      $result = mysqli_query($conn , $sql);
      while($row =mysqli_fetch_assoc($result))
      {

       ?>

       <div class="form-group">
        <label for="firstname">Firstname:</label>
        <input type="firstname" class="form-control" id="firstname" value="<?php echo $row['firstname'] ?>" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="lastname">Lastname:</label>
        <input type="lastname" class="form-control" id="lastname" value="<?php echo $row['lastname'] ?>" name="lastname" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" value="<?php echo $row['email'] ?>" name="email" required>
        <img src="uploads/<?php echo $row['image'] ?>" style="height: 50px ; width: 50px;">
      </div>
      <div class="form-group">
        <label for="fileToUpload">Upload Image:</label>
        <input type="file" class="form-control" id="fileToUpload" placeholder="Enter Lastname" name="fileToUpload" >
        <p id="image_error"></p>
      </div>

      <button type="submit"  name="submit" class="btn btn-primary">Update Details</button>
      <!-- <button  class="btn btn-success"><a href="login.php">Login</a></button> -->
    <?php } ?>
  </form>                  
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php 
include('footer.php'); 
?>

