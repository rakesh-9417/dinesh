
<?php
session_start();
include('conn.php');
if(isset($_SESSION['id']))
{
  header("Location: welcome.php");

}

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql ="SELECT * FROM member WHERE email ='$email' AND password='$password'";
  $result = mysqli_query( $conn , $sql);
  $count = mysqli_num_rows( $result);
  if($count > 0)
  {
    while($row=mysqli_fetch_assoc( $result)){
      $_SESSION['id'] = $row['id'];
      $_SESSION['firstname'] = $row['firstname'];
    }
    echo "login successfuly";
    echo  $_SESSION['id'];
    //header('Location : welcome.php');
    header("Location: welcome.php");
  }
  else{
   $_SESSION['msg'] = "Something wrong" ;
 }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <?php 
                  if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
                    // echo $_SESSION['msg'];
                    echo '<div class="alert alert-danger" role="alert">
                    You have entered wrong email id or password , please check it again
                    </div>';
                    unset($_SESSION['msg']);
                  }
                  ?>
                  <form class="user"  method="post" action="#">
                    <div class="form-group">
                     <input type="email" class="form-control form-control-user" id="email"
                     placeholder="Email Address" name="email">
                     <span id="email_error"></span>
                     <span id="invalid_email"></span>

                   </div>
                   <div class="form-group">
                    <input type="password" class="form-control form-control-user"
                    id="password"  name="password" placeholder="Password">
                    <span id="password_error"></span>
                  </div>
                  <div class="form-group">

                  </div>
                  <button type="submit"  name="submit" class="btn btn-primary btn-user btn-block submit"> Login</button>
                  <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                    Login
                  </a> -->
                  <hr>
                   <!-- <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                                  </div> -->
                  <a href="index.html" class=" disabled  btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Login with Google
                  </a>
                  <a href="index.html" class=" disabled btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                  </a>
                </form>
                <hr>
                <div class="text-center">
                  <p class="small disabled" href="forgot-password.html">Forgot Password?</p>
                </div>
                <div class="text-center">
                  <a class="small" href="index.php">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>


<script type="text/javascript">

  $(document).ready(function (){ 

    $('.submit').click(function(){



     $("#email_error").html("");
     $("#invalid_email").html("");
     $('#email').css("border-color", "");

     $("#password_error").html("");
     $('#password').css("border-color", "");



     var email = $('#email').val();

     if($.trim($('#email').val()) == ''  )
     {
       $('#email').css("border-color", "red");
       $('#email_error').css("color", "red");
       $("#email_error").html("Please fill your email id");
       return false;
     }
     if(IsEmail(email) == false){
      $('#email').css("border-color", "red");
      $('#invalid_email').css("color", "red");
      $("#invalid_email").html("Please fill correct email id");
      return false;
    }
    if($.trim($('#password').val()) == ''  )
    {
     $('#password').css("border-color", "red");
     $('#password_error').css("color", "red");
     $("#password_error").html("Please fill password");
     return false;
   }
 });
  });
  function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) 
    {
      return false;
    }else
    {
      return true;
    }
  }
</script>