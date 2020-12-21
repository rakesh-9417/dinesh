bacup for gallery 11-11-2020  12:16pm
<?php 
// $sql1 = "UPDATE member  SET password ='$new_password'  WHERE id='$id'";
<?php 
// $sql1 = "UPDATE member  SET password ='$new_password'  WHERE id='$id'";

include('conn.php');
session_start();
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
    echo " password Changed Successfully";
    $msg = "password Changed Successfully" ;

  }
  else{
    echo "Entered password does not match with current password";
  }


}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <script type="text/javascript" src="highslide/highslide.js"></script>
  <!-- <script type="text/javascript" src="highslide/highslide.config.js" charset="utf-8"></script>
  --><link rel="stylesheet" type="text/css" href="highslide/highslide.css" />


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/path/to/dist/css/image-zoom.css" />



  <style>
    img {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 150px;
    }

    img:hover {
      box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
    img{height:100px;}

    #overlay{
      position: fixed;
      top:10%;
      left:25%;
      width:50%;
      height:500px;
      background: rgba(0,0,0,0.8) none 50% / contain no-repeat;
      cursor: pointer;
      transition: 0.1s;

      visibility: hidden;
      opacity: 0;
    }
    #overlay.open {
      visibility: visible;
      opacity: 1;
    }

    #overlay:after { /* X button icon */
      content: "\2715";
      position: absolute;
      color:#fff;
      top: 10px;
      right:20px;
      font-size: 2em;
    }
  </style>

</script>
<script type="text/javascript">
  //hs.graphicsDir = 'uploads/';
  //hs.outlineType = 'rounded-white';
  hs.graphicsDir = 'uploads/';
  hs.outlineType = '';
  hs.captionEval = 'this.a.title';
</script>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="welcome.php">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="member_list.php">See All Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Image Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="change_password.php">Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div id="overlay"></div>
  <div class='container'>
   <div class="gallery">
    <?php
    //require_once('database.php');
$db=$conn; // Enter your Connection variable;
$tableName='member'; // Enter your table Name;
  $results_per_page = 2;

  if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
    $page_first_result = ($page-1) * $results_per_page;  
  

$fetchImage= fetch_image($tableName);
      // fetching padination data
function fetch_image($tableName){
 global $db;
 $tableName= trim($tableName);
 if(!empty($tableName)){
  $query = "SELECT * FROM ".$tableName ;
  $result = $db->query($query);
  $number_of_result = mysqli_num_rows($result);  
   echo $number_of_result;
     $number_of_page = ceil ($number_of_result / $results_per_page);  
      global $number_of_page;
  


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
            />
          </a>
        </div>
        <?php
        $sn++;}
      }else{
        echo "No Image is saved in database";
      }
       for($page = 1; $page<= $number_of_page; $page++) {  
        echo '<a href = "index2.php?page=' . $page . '">' . $page . ' </a>';  
    }  
      ?>

    </div>
  </div>

</body>
</html>

