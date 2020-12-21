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
                        <h1 class="h3 mb-0 text-gray-800">Image Gallery</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div> 
                   <!-- <h2>See All Members</h2> -->
    <!-- <p>The .table-striped class adds zebra-stripes to a table:</p>             -->
                 <div id="overlay"></div>
  <div class='container'>
   <div class="gallery">
    <?php
   
    //require_once('database.php');
$db=$conn; // Enter your Connection variable;
$tableName='member'; // Enter your table Name;
$fetchImage= fetch_image($tableName);
      // fetching padination data
function fetch_image($tableName){
 global $db;
 $tableName= trim($tableName);
 if(!empty($tableName)){
  $query = "SELECT * FROM ".$tableName." ORDER BY id ASC";
  $result = $db->query($query);
  if ($result->num_rows > 0) {
    $row= $result->fetch_all(MYSQLI_ASSOC);
    return $row;       
  }else{

    echo "No Image is stored in the database";
  }
}else{
  echo "you must declare table name to fetch Image";
}
}  
?>
<div class="modal-content">
  <?php 
  if(!empty($fetchImage))
  {
    $sn=1;
    foreach ($fetchImage as $img) {
      ?>
      <div class="column ">
        <div style="text-align: justify">
          <a href="uploads/<?php echo $img['image']; ?>" class="highslide" onclick="return hs.expand(this)"
            title="<?php echo $img['image']; ?>" style="float:right; margin: 0 0 10px 15px">
            <img src="uploads/<?php echo $img['image']; ?>"  alt=""
            style="width: 107px;height:120px;" />
          </a>
        </div>
        <?php
        $sn++;}
      }else{
        echo "No Image is saved in database";
      }
      ?>
    </div>
  </div>     
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<?php 
include('footer.php'); 
?><!-- 
end of member list -->




