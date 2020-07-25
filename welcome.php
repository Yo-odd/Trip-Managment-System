<?php 
session_start();
// $userid=html_entity_decode($_SESSION['userid']);
$userid=$_SESSION['userid'];
echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";

error_reporting(0);
//for db connection

$servername = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "dtms";
//$REQUEST_URI="http://localhost/TMS/dummytests/createprofile.html";
//for form handling
 // $luname = $_POST["luname"];
 // $lpassword = $_POST["lpassword"];
 // $userid='';

// Create connection
$conn = mysqli_connect($servername, $username1, $password1, $dbname1);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT userid,username,emailid,password,contactno,uidai FROM user WHERE userid='".$userid."';";

    
    $userDetails=mysqli_query($conn, $sql);

    if (mysqli_num_rows($userDetails) == 1) {
              while($row = mysqli_fetch_assoc($userDetails)) {
                $username = $row["username"];
                $password = $row["password"];
                $Contact_no = $row["Contact_no"];
                $email = $row["email"];
                $uidai = $row["uidai"];
                // $_SESSION['userid'] = $row['userid'];
                // echo "<table class=\"text-center ml-auto mr-auto\">
                // <tr class=\"row\">
                // <th class=\"col\">userid</th>
                // <th class=\"col\">username</th>
                // <th class=\"col\">emailid</th>
                // <th class=\"col\">password</th>
                // <th class=\"col\">contactno</th>
                // <th class=\"col\">uidai</th>
                // </tr>";
                // echo "<tr class=\"row\">";
                // echo "<td class=\"col\">" .$row['userid']."</td>";
                // echo "<td class=\"col\">" .$row['username']."</td>";
                // echo "<td class=\"col\">" .$row['emailid']."</td>";
                // echo "<td class=\"col\">" .$row['password']."</td>";
                // echo "<td class=\"col\">" .$row['contactno']."</td>";
                // echo "<td class=\"col\">" .$row['uidai']."</td>";
                // echo "</tr>";
                // echo "</table>";
                }
            } 
    else {
      $error=mysqli_error($conn);
        //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('Incorrect log in details !".$error."');</script>";
    }

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="1paperkit/assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="1paperkit/assets/img//favicon.png">
  <!-- <script src="https://kit.fontawesome.com/f2377dc66c.js" crossorigin="anonymous"></script> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Travel Managment System
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
 <!--  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet"> -->

  <!-- CSS Files -->
  <link href="1paperkit/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="1paperkit/assets/css/paper-kit.css" rel="stylesheet" />
  <!-- <link href="1paperkit/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="1paperkit/assets/demo/demo.css" rel="stylesheet" />
  <!-- <script defer src="fontawesome/js/all.js"></script>  -->
  <script src="https://kit.fontawesome.com/f2377dc66c.js" crossorigin="anonymous"></script>
  <!--load all styles -->
  <!-- scroll reveal -->
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <script>
        ScrollReveal({ reset: true });
  </script>

  <!-- image reveal -->
  <link rel="stylesheet" type="text/css" href="ImageRevealHover/css/base.css" />
  <link rel="stylesheet" href="https://use.typekit.net/ljn4kgu.css">
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <!-- <a target="_blank|_self|_parent|_top|framename"> -->
        <a class="navbar-brand" href="#" rel="tooltip" title="" data-placement="bottom" target="_self">
          <h3><i class="nc-icon nc-air-baloon"></i>TMS</h3>
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-outline-neutral dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nc-icon btn-outline-neutral nc-single-02"></i> <?php echo $username;?>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" name="btn_update" href="update.php">Update Profile<i class="nc-icon nc-refresh-69"></i></a>
                <a class="dropdown-item" name="btn_logout" href="logout.php">Log Out <i class="nc-icon nc-button-power"></i></a>
                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header section-dark" style="background-image: url('1paperkit/assets/img/antoine-barres.jpg')">
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h4 class="presentation-title" style="font-size: 60">Travel Managment System</h4>
          <div class="fog-low">
            <img src="1paperkit/assets/img/fog-low.png" alt="">
          </div>
          <div class="fog-low right">
            <img src="1paperkit/assets/img/fog-low.png" alt="">
          </div>
        </div>
        <h2 class="presentation-subtitle text-center">Get Things done at one step! </h2>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url('1paperkit/assets/img/clouds.png'); "></div>
  </div>
 


    <div class="section pt-o" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card page-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="1paperkit/assets/img/soroush-karimi.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <p>Somewhere</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="1paperkit/assets/img/federico-beccari.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <p>Somewhere else</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="1paperkit/assets/img/joshua-stannard.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <p>Here it is</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title punchline">Stuck at where to go?</h2>
            <p class="description punchline">We have amazing packages for you <?php echo "<h6>".$username."</h6>";  ?>so hurry up go and grab it !.</p>
          </div>
          <div class="col-md-5 ml-auto mr-auto download-area">
            <a href="planningtrip.php" class="btn btn-outline-info btn-round punchline block__link px-2" data-fx="7" data-img="ImageRevealHover/img/48.jpg"><i class="far fa-lg fa-compass"></i> Packages</a>
          </div>
        </div>
        <!-- <div class="row text-center upgrade-pro">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title punchline">Wanna go solo?</h2>
            <p class="description punchline">Kiss your home goodbye and just
              <a href="#" class="text-danger punchline block__link" target="_blank" data-fx="3" data-img="ImageRevealHover/img/1.jpg">do it!</a>
          </div>
          <div class="col-sm-5 ml-auto mr-auto">
            <a href="planningtrip.php" class="btn btn-outline-primary btn-round punchline px-2 block__link" data-fx="5" data-img="ImageRevealHover/img/46.jpg"><i class="nc-icon nc-headphones mr-1" aria-hidden="true"></i> Solo Trip</a>
          </div>
        </div> -->
      </div>
    </div>


    <div class="section">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title punchline">Already Created the trip?</h2>
            <p class="description punchline">That's Great <?php echo "<h6>".$username." !  now you can add Expenses.</h6>";  ?></p>
          </div>
          <div class="col-md-5 ml-auto mr-auto download-area">
            <a href="expenses.php" class="btn btn-outline-info btn-round punchline block__link px-2" data-fx="7" data-img="ImageRevealHover/img/49.jpg">Expenses <i class="fas fa-lg fa-rupee-sign"></i></a>
          </div>
        </div>
        <!-- <div class="row text-center upgrade-pro">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title punchline">Wanna go solo?</h2>
            <p class="description punchline">Kiss your home goodbye and just
              <a href="#" class="text-danger punchline block__link" target="_blank" data-fx="3" data-img="ImageRevealHover/img/1.jpg">do it!</a>
          </div>
          <div class="col-sm-5 ml-auto mr-auto">
            <a href="planningtrip.php" class="btn btn-outline-primary btn-round punchline px-2 block__link" data-fx="5" data-img="ImageRevealHover/img/46.jpg"><i class="nc-icon nc-headphones mr-1" aria-hidden="true"></i> Solo Trip</a>
          </div>
        </div> -->
      </div>
    </div>


    
    <footer class="footer footer-black  footer-white ">
      <div class="container">
        <div class="row">
          <div class="credits ml-auto mr-auto">
            <span class="copyright">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script>, made with <i class="fa fa-heart heart"></i> by Yo odd
            </span>
          </div>
        </div>
      </div>
    </footer>
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
    <script>
      $(document).ready(function() {

        if ($("#datetimepicker").length != 0) {
          $('#datetimepicker').datetimepicker({
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
        }

        function scrollToDownload() {

          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
      });

      ScrollReveal().reveal('.punchline', { delay: 200 });
    </script>

     <script src="ImageRevealHover/js/charming.min.js"></script>
    <script src="ImageRevealHover/js/imagesloaded.pkgd.min.js"></script>
    <script src="ImageRevealHover/js/TweenMax.min.js"></script>
    <script src="ImageRevealHover/js/demo.js"></script>
</body>

</html>
