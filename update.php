<?php  
  session_start();
// $userid=html_entity_decode($_SESSION['userid']);
$userid=$_SESSION['userid'];
echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style> -->

    <link rel="apple-touch-icon" sizes="76x76" href="1paperkit/assets/img//apple-icon.png">
      <link rel="icon" type="image/png" href="1paperkit/assets/img//favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>
        Trip Managment System
      </title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
      <!-- CSS Files -->
      <link href="1paperkit/assets/css/bootstrap.min.css" rel="stylesheet" />
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
      <link href="1paperkit/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <!-- <link href="1paperkit/assets/demo/demo.css" rel="stylesheet" /> -->
</head>

<body class="register-page sidebar-collapse">

    <div class="page-header" style="background-image: url('1paperkit/assets/img/login-image.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-lg-4 ">
          <div class="card card-body col-md-auto">
                <blockquote class="blockquote text-center">
                  <p class="h4">Update Your Details</p><br>
                </blockquote>
            <!-- <div class="social-line text-center">
              <a href="#pablo" class="btn btn-neutral btn-facebook btn-just-icon">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-neutral btn-google btn-just-icon">
                <i class="fa fa-google-plus"></i>
              </a>
              <a href="#pablo" class="btn btn-neutral btn-twitter btn-just-icon">
                <i class="fa fa-twitter"></i>
              </a>
            </div> -->
            <form id="sign_up" name="sign_up_form" class="register-form needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" onsubmit="return validate();" novalidate>

            
              <div class="form-group">
                    <label for="validationCustom01" class="h6">Username</label>
                    <input type="text" name="uname" id="validationCustom01" class="form-control" placeholder="Enter your name here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                </div>
                <div class="form-group">
                    <label for="validationCustom02" class="h6">E-mail</label>
                    <input type="email" data-bv-emailaddress-message="The value is not a valid email address" name="email" id="validationCustom02" class="form-control" placeholder="Enter your Mail here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter an valid email.
                    </div>
                </div>
                <div class="form-group">
                    <label for="validationCustom03" class="h6">Contact No.</label>
                    <input type="text" pattern="[0-9]{10}" maxlength="10" minlength="10" name="Contact_no" id="validationCustom03" class="form-control" placeholder="Enter your contact information here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a Contact.
                    </div>
                </div> 
                <div class="form-group">
                    <label for="validationCustom04" class="h6">UIDAI</label>
                    <input type="text" name="uidai" id="validationCustom04" class="form-control" placeholder="Enter your UIDAI here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a UIDAI.
                    </div>
                </div>
                <!-- <div class="row justify-content-md-center"> -->
                    <div class="form-group">
                    <label for="validationCustom05" class="h6">Password</label>
                    <input type="password" name="password" id="validationCustom05" class="form-control" placeholder="Enter your Password here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a Password.
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom06" class="h6">Confirm Password</label>
                        <input type="password" name="confirm_password" id="validationCustom06" class="form-control" placeholder="Re-Enter your Password here" required>
                        <span class="help-block"></span>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                          Please Re-enter the password.
                        </div>
                    </div>
                <!-- </div>    -->
                
                <div class="form-group row align-self-center">
                    <input type="submit" name="btn_update" class="col ml-2 mr-2 btn btn-info btn-block btn-round" value="Update">
                    <input type="reset" class="col ml-2 mr-2 btn btn-danger btn-block btn-round" value="Reset">
                </div>
            </form>
            
           
                  <!-- <a href="#" class="btn btn-link btn-danger" style="margin-top: 10px">Already have an account?<br>Login here</a> -->
                    <button type="button" name="btn_log_in" class="btn btn-primary btn-round">
                        <span class="text-muted  text-center h6"><a href="http://localhost/TMS/dummytests/login.php">Login to account</a></span> 
                    </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="footer register-footer text-center">
      <h6>©
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
    </div> -->
  </div>

   

    <!--   Core JS Files   -->
  <script src="1paperkit/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="1paperkit/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="1paperkit/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="1paperkit/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="1paperkit/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="1paperkit/assets/js/plugins/moment.min.js"></script>
  <script src="1paperkit/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="1paperkit/assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <script type="text/javascript">
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>

</html>

<?php
// Include config file
//require_once "config.php";
error_reporting(0);
//for db connection
$servername = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "dtms";

//for form handling
 $username = $_POST["uname"];
 $password = $_POST["password"];
 $Contact_no = $_POST["Contact_no"];
 $email = $_POST["email"];
 $uidai = $_POST["uidai"];
 $confirm_password = $_POST["confirm_password"];
 $match=array();




// Create connection
$conn = mysqli_connect($servername, $username1, $password1, $dbname1);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE user SET username='".$username."',emailid='".$email."',password='".$password."',contactno='".$Contact_no."',uidai='".$uidai."' WHERE userid='".$userid."';";
$sql1 = "SELECT userid,username,emailid,password,contactno,uidai FROM user WHERE userid='".$userid."';";

// $sql1 = "SELECT userid,username,emailid,password,contactno,uidai FROM user WHERE username='".$username."';";
//if($username==$password==$email==$confirm_password=="")
if($username=="")
{
    //echo "the user name is =".$username;
    // echo "<script>alert('Enter all the necessary Details !');</script>"; 
    exit();
}

if($password!=$confirm_password)
{
    echo "<script>alert('Password mismatch!');</script>";
    exit();
}

function compare($str1,$str2)
{
    if($str1==$str2){
        array_push($GLOBALS['match'],$str1);
    }
}

if(isset($_POST['btn_update'])) {
    
    $userDetails=mysqli_query($conn, $sql1);

    if (mysqli_num_rows($userDetails) > 0) {
              while($row = mysqli_fetch_assoc($userDetails)) {
                    if($username==$row['username'] || $Contact_no==$row['contactno'] || $email==$row['emailid'] || $uidai==$row['uidai']){
                       {
                            compare($username,$row['username']);
                            compare($Contact_no,$row['contactno']);
                            compare($email,$row['emailid']);
                            compare($uidai,$row['uidai']);
                            $comma_separated = implode(",", $match);
                            //print_r($match);
                            echo "<script>alert('Data clash ! Please consider changing these values >".$comma_separated."');</script>";
                            exit();
                       }

                   }
                                                         
                }
    } 
    else {
        $error=mysqli_error($conn);
        //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
        //echo "<script>alert('Error in retrival: +".$error." +');</script>";
    } 

    if (mysqli_query($conn, $sql)) {
                       echo "<script>alert('new record Updated successfully !');</script>";  
                        } 
                        else {
                            $error=mysqli_error($conn);
                            //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                            echo "<script>alert('Error in Modifications: +".$error." +');</script>";
                        } 
    
} 

mysqli_close($conn);
?>