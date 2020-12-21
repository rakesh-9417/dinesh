<?php 
session_start();
if(!isset($_SESSION['id']))
{
    header("Location: login.php");

}
include('conn.php');

include('header.php'); 

?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Category</h1>

    </div> 
    <form class="form-horizontal" method="post" action="insert_category.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="title">Title:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" required>
        </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Description:</label>
      <div class="col-sm-10">          
        <textarea class="form-control" id="description" rows="3" placeholder=" Enter Description" name="description" required></textarea>
    </div>
</div>
<div class="form-group">
          <label class="control-label col-sm-2" for="title">Image:</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" id="fileToUpload" placeholder="Enter Title" name="fileToUpload" required>
            <p id="image_error"></p>
        </div>   
    </div>
    <!-- Group of material radios - option 1 -->
<div class="form-group">
    <label class="control-label col-sm-2" for="title">Status:</label>
    <div class="col-sm-10">&nbsp &nbsp&nbsp&nbsp&nbsp 
  <!-- <input type="radio" class="form-check-input" id="materialGroupExample1" name="groupOfMaterialRadios">
  <label class="form-check-label" for="materialGroupExample1">Active </label>&nbsp &nbsp&nbsp&nbsp
  <input type="radio" class="form-check-input" id="materialGroupExample2" name="groupOfMaterialRadios" >
  <label class="form-check-label" for="materialGroupExample2">Not Active</label>&nbsp &nbsp&nbsp&nbsp
   -->
   <input type="radio" id="active" name="status" value="active">
  <label for="male">Active</label>&nbsp &nbsp&nbsp&nbsp&nbsp 

  <input type="radio" id="not_active" name="status" value="not_active">
   <label for="female">Not Active</label><br>

</div>
</div>

<!-- Group of material radios - option 2 -->


<!-- Group of material radios - option 3 -->


<div class="form-group">        
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary btn-user btn-block submit" name="submit">Submit</button>
</div>
</div>
</form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php 
include('footer.php'); 
?>