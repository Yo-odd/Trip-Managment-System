


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
        Trip Managment Sysytem
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
                  <p class="h4">Trip Managment System</p><br>
                </blockquote>
            <form id="log_in" name="log_in_form" class="register-form needs-validation" action="loginverify.php"  method="post" onsubmit="return validate();" novalidate>

            
              <div class="form-group">
                    <label for="validationCustom01" class="h6">Username</label>
                    <input type="text" name="luname" id="validationCustom01" class="form-control" placeholder="Enter your name here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                </div>
                
                <!-- <div class="row justify-content-md-center"> -->
                    <div class="form-group">
                    <label for="validationCustom02" class="h6">Password</label>
                    <input type="password" name="lpassword" id="validationCustom02" class="form-control" placeholder="Enter your Password here" required>
                    <span class="help-block"></span>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please enter a Password.
                    </div>
                    </div>
                <div class="form-group row align-self-center">
                    <input type="submit" name="btn_log_in" class="col ml-2 mr-2 btn btn-info btn-block btn-round" value="Log In">
                    <input type="reset" class="col ml-2 mr-2 btn btn-danger btn-block btn-round" value="Reset">
                </div>
                <div class="modal-footer no-border-footer">
                <span class="text-muted  text-center">Looking <a class="text-center badge badge-light" href="http://localhost/TMS/dummytests/regi.php">create an account</a> ?</span>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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

</script>

</html>

