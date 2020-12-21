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
                        <h1 class="h3 mb-0 text-gray-800">See All Members</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div> 
                   <!-- <h2>See All Members</h2> -->
    <!-- <p>The .table-striped class adds zebra-stripes to a table:</p>             -->
    <table class="table table-striped">
      
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
           <th>Image</th>
          <th>Update</th>
          <th>Delete</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
        $sql = "SELECT * FROM member";
        $result = mysqli_query($conn , $sql);
   // $row = mysqli_fetch_array()
        while($row = mysqli_fetch_array($result)){

         ?>
         <tr>
          <td><?php echo $row['firstname'] ?></td>
          <td><?php echo $row['lastname'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><img src="uploads/<?php echo $row['image'] ?>" style="height: 50px ; width: 50px;"></td>
          <td><a class="btn btn-success" href="update.php?id=<?php echo $row['id'] ?>" role="button">Update</a></td>
          <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>" role="button">Delete</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>                  
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<?php 
include('footer.php'); 
?><!-- 
end of member list -->

