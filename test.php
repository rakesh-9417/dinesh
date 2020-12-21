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
    <h1 class="h3 mb-0 text-gray-800">DataTables Pagination</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
      class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div> 
    <table id="example" class="table table-striped table-bordered display" style="width:100%">
      <thead>
        <tr>
          <th>Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Image</th>
          
          
        </tr>
      </thead>
      <tbody>
        <?php  $query = "SELECT *FROM member " ;
        $result = mysqli_query($conn, $query); 
        //display the retrieved result on the webpage  
        while ($row = mysqli_fetch_array($result)) {  
          ?>
          <tr>

            <td><?php  echo $row['id'] ?></td>
            <td><?php  echo $row['firstname'] ?></td>
            <td><?php  echo $row['lastname'] ?></td>
            <td><?php  echo $row['email'] ?></td>
            <td> <a href="uploads/<?php echo $row['image']; ?>" class="highslide" onclick="return hs.expand(this)"
              title="<?php echo $row['image']; ?>" style="float:right; margin: 0 0 10px 15px"><img src="uploads/<?php echo $row['image']; ?>"  alt="<?php echo $row['image']; ?>"
              style="width: 25px;height:25px;" /> </a></td>
              
              
              

            </tr>
          <?php  }  ?>

        </tbody>

      </table>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#example').DataTable();
        } );
      </script>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->


  <?php 
  include('footer.php'); 
  ?>
  


