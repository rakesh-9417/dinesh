<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<!-- <style>
/* Style all input fields */


/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style> -->
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user"  id="myForm" method="post" action="insert.php" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="firstname" placeholder="First Name" name="firstname">
                    <span id="firstname_error"></span>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="lastname" placeholder="Last Name" name="lastname">
                    <span id="lastname_error"></span>
                  </div>
                </div>
                <div class="form-group">
                  
                  <!-- <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLangHTML">
                    <label class="custom-file-label" for="customFileLangHTML" data-browse="Bestand kiezen">Voeg je document
                    toe</label>
                  </div> -->
                  <input type="file" class="form-control form-control-user" id="fileToUpload" placeholder="Enter Lastname" name="fileToUpload" >
                  <p id="image_error"></p>
                <!--  <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                 placeholder="Email Address"> -->
               </div>
               <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="email" class="form-control form-control-user" id="email"
                  placeholder="Email Address" name="email">
                  <span id="email_error"></span>
                  <span id="invalid_email"></span>
                  
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user"
                  id="password"  name="password" placeholder="Password">
                  <span id="password_error"></span>
                </div>
              </div>
             <!--  <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              </div> -->
              <button type="submit"  name="submit" class="btn btn-primary btn-user btn-block submit"> Register Account</button>

               <!--  <a href="login.html" class="btn btn-primary btn-user btn-block"  name="submit">
                  Register Account
                </a> -->
                <hr>
                <a href="index.html" class=" disabled btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="disabled btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center disabled">
                <p class=" disabled small " href="#">Forgot Password?</p>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
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

     $("#firstname_error").html("");
     $('#firstname').css("border-color", "");
     
     $("#lastname_error").html("");
     $('#lastname').css("border-color", "");
     
     $("#image_error").html("");
     $('#fileToUpload').css("border-color", "");
     
     $("#email_error").html("");
     $("#invalid_email").html("");
     $('#email').css("border-color", "");
     
     $("#password_error").html("");
     $('#password').css("border-color", "");
     

     if($.trim($('#firstname').val()) == ''  )
     {
       $('#firstname').css("border-color", "red");
       $('#firstname_error').css("color", "red");
       $("#firstname_error").html("Please fill the first name");
       return false;
     }
     if($.trim($('#lastname').val()) == ''  )
     {
       $('#lastname').css("border-color", "red");
       $('#lastname_error').css("color", "red");
       $("#lastname_error").html("Please fill the Last name");
       return false;
     }
     if($.trim($('#fileToUpload').val()) == ''  )
     {
       $('#fileToUpload').css("border-color", "red");
       $('#image_error').css("color", "red");
       $("#image_error").html("Please select Image for Uploading");
       return false;
     }
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
     $("#password_error").html("Please fill Valid password ");
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
<!-- <script>
  var myInput = document.getElementById("password");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script> -->

