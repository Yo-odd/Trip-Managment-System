
 
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
        Package Managment
      </title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
      <!-- CSS Files -->
      <link href="1paperkit/assets/css/bootstrap.min.css" rel="stylesheet" />
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
      <link href="1paperkit/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
      <script defer src="fontawesome/js/all.js"></script> <!--load all styles -->
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <!-- <link href="1paperkit/assets/demo/demo.css" rel="stylesheet" /> -->
</head>

<body class="register-page sidebar-collapse">

  <div  style="background-image: url('1paperkit/assets/img/login-image.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-lg-4 ">
          <div class="card card-body col-md-auto">
                <blockquote class="blockquote text-center">
                  <p class="h4">Package Managment</p><br>
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
            <form id="sign_up" name="sign_up_form" class="register-form needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" onsubmit="return validate();" enctype="multipart/form-data" novalidate>

            
              <!-- <div class="form-group">
                    <label for="validationCustom01" class="h6">Package Type</label>
                    <input type="text" name="package" id="validationCustom01" class="form-control" placeholder="Group or Solo" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a Package Type.
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <label for="validationCustom02" class="h6">E-mail</label>
                    <input type="email" data-bv-emailaddress-message="The value is not a valid email address" name="email" id="validationCustom02" class="form-control" placeholder="Enter your Mail here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter an valid email.
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="validationCustom01" class="h6">Source</label>
                    <input type="text" name="source" id="validationCustom01" class="form-control" placeholder="Enter Package Source" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a Package Source.
                    </div>
                </div>
                <div class="form-group">
                    <label for="validationCustom02" class="h6">Destination</label>
                    <input type="text" name="destination" id="validationCustom02" class="form-control" placeholder="Enter your Destination here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a Destination.
                    </div>
                </div>
                <div class="form-group">
                    <label for="validationCustom03" class="h6">Transport</label>
                    <input type="text" name="transport" id="validationCustom03" class="form-control" placeholder="Enter your Transport medium here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a Transport medium.
                    </div>
                </div>
                <div class="form-group">
                    <label for="validationCustom04" class="h6">Accommodation</label>
                    <input type="text" name="accommodation" id="validationCustom04" class="form-control" placeholder="Enter your Accommodation here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a Accommodation.
                    </div>
                </div>

                <!-- input with datetimepicker -->
                <div class="form-group">
                    <label for="validationCustom05" class="h6">Trip Start</label>
                    <input type="text" name="sdate" id="validationCustom05" class="form-control datetimepicker" placeholder="27/03/2019" required/>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a Package Start Date.
                    </div>
                </div>

                <!-- input with datetimepicker -->
                <div class="form-group">
                    <label for="validationCustom06" class="h6">Trip End</label>
                    <input type="text" name="edate" id="validationCustom06" class="form-control datetimepicker" placeholder="27/03/2019" required/>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a Package End Date.
                    </div>
                </div>

                <div class="form-group">
                    <label for="validationCustom07" class="h6">Package Price</label>
                    <input type="number" name="pkgprice" id="validationCustom07" class="form-control" placeholder="Enter your Package Price information here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a Package Price.
                    </div>
                </div> 

                <div class="form-group">
                    <label for="validationCustom08" class="h6">Meal Price</label>
                    <input type="number" name="mealprice" id="validationCustom08" class="form-control" placeholder="Enter your Meal Price information here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter a Meal Price.
                    </div>
                </div> 

                <div class="input-group ml-auto mb-2">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-default btn-round btn-just-icon" name="imgsubmit" type="button" id="inputGroupFileAddon04"><i class="fas fa-camera fa-lg"></i></button>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="uimg" id="inputGroupFile03" aria-describedby="inputGroupFileAddon04" required>
                    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                  </div>
                  <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Upload the image.
                    </div>
                </div>
                
                <!-- <div class="row justify-content-md-center"> -->
                    <!-- <div class="form-group">
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
                    </div> -->
                <!-- </div>    -->
                
                <div class="form-group row align-self-center">
                    <input type="submit" name="btn_add_pkg" class="col ml-2 mr-2 btn btn-info btn-block btn-round" value="Add Pkg">
                    <input type="reset" class="col ml-2 mr-2 btn btn-danger btn-block btn-round" value="Reset">
                </div>
            </form>
            
           
                  <!-- <a href="#" class="btn btn-link btn-danger" style="margin-top: 10px">Already have an account?<br>Login here</a> -->
                    <button type="button" name="btn_log" class="btn btn-primary btn-round" href="http://localhost/TMS/dummytests/login.php">
                        <span class="text-dark text-center h6"><a href="http://localhost/TMS/dummytests/login.php">Login to account</a></span> 
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
</body>
   

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

// javascript for init
$('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});

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

// $package = $_POST["package"];
$source = $_POST["source"];
$destination = $_POST["destination"];
$transport = $_POST["transport"];
$accommodation = $_POST["accommodation"];
// $start = date("Y-m-d", $_GET['order_start']);
$sdate = date("Y-m-d",strtotime($_POST["sdate"]));
$edate = date("Y-m-d",strtotime($_POST["edate"]));
$pkgprice = $_POST["pkgprice"];
$mealprice = $_POST["mealprice"];
// $img=$_POST['uimg'];
// $match=array();

// $target_dir = "C:/xampp/htdocs/TMS/dummytests/pkgStock";

$target_dir = "C:/xampp/htdocs/TMS/dummytests/pkgStock/";
$target_file = $target_dir . basename($_FILES["uimg"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image




// Create connection
$conn = mysqli_connect($servername, $username1, $password1, $dbname1);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO package (durationStart,durationEnd,source,destination,transport,pkgPrice,mealPrice,Accommodation,img) values ('".$sdate."','".$edate."','".$source."','".$destination."','".$transport."','".$pkgprice."','".$mealprice."','".$accommodation."','".$target_file."')";
// $sql1 = "SELECT pkgid,pkgType,durationStart,durationEnd,source,destination,transport,pkgPrice,mealPrice,Accommodation FROM package WHERE pkgType='".$username."' OR emailid='".$email."' OR contactno='".$Contact_no."' OR source='".$source."';";
// $sql1 = "SELECT userid,username,emailid,password,contactno,source FROM user WHERE username='".$username."';";
//if($username==$password==$email==$confirm_password=="")



// function compare($str1,$str2)
// {
//     if($str1==$str2){
//         array_push($GLOBALS['match'],$str1);
//     }
// }

if(isset($_POST['btn_add_pkg'])) {
    
    // $userDetails=mysqli_query($conn, $sql1);

    // if (mysqli_num_rows($userDetails) > 0) {
    //           while($row = mysqli_fetch_assoc($userDetails)) {
    //                 if($username==$row['username'] || $Contact_no==$row['contactno'] || $email==$row['emailid'] || $source==$row['source']){
    //                    {
    //                         compare($username,$row['username']);
    //                         compare($Contact_no,$row['contactno']);
    //                         compare($email,$row['emailid']);
    //                         compare($source,$row['source']);
    //                         $comma_separated = implode(",", $match);
    //                         //print_r($match);
    //                         echo "<script>alert('Data clash ! Please consider changing these values >".$comma_separated."');</script>";
    //                         exit();
    //                    }

    //                }
                                                         
    //             }
    // } 
    // else {
    //     $error=mysqli_error($conn);
    //     //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
    //     //echo "<script>alert('Error in retrival: +".$error." +');</script>";
    // } 

    // if(isset($_POST["imgsubmit"])) {
      $check = getimagesize($_FILES["uimg"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
    // }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>alert('Sorry, file already exists !');</script>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["uimg"]["size"] > 50000000000) {
        echo "<script>alert('Sorry, your file is too large !');</script>";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed !');</script>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded !');</script>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["uimg"]["tmp_name"], $target_file)) {
            echo "<script>alert('The file:".basename( $_FILES["uimg"]["name"])." has been uploaded !');</script>";
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file !');</script>";
        }
    }


    if (mysqli_query($conn, $sql)) {
                       echo "<script>alert('new Package added successfully !".$sdate." ".$edate."');</script>";  
                        } 
                        else {
                            $error=mysqli_error($conn);
                            //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                            echo "<script>alert('Error in insertion: +".$error." +');</script>";
                        } 
    
} 

mysqli_close($conn);
?>