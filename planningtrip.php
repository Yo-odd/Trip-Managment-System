<?php 
session_start();
// $userid=html_entity_decode($_SESSION['userid']);
$userid=$_SESSION['userid'];
echo "<script>alert('Session value in current page is ".$_SESSION['userid']."');</script>";

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
$pkg = "SELECT * FROM package;";
// $pkg = "SELECT pkgid,pkgType,durationStart,durationEnd,source,destination,transport,pkgPrice,mealPrice,Accommodation FROM package;";
    
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

    // $pkgDetails=mysqli_query($conn, $pkg);

    // if (mysqli_num_rows($userDetails) > 0) {
    //           while($row = mysqli_fetch_assoc($pkgDetails)) {
    //             $pkgid = $row["pkgid"];
    //             // $_SESSION['pkgid']=$row["pkgid"];
    //             $pkgType = $row["pkgType"];
    //             $durationStart = $row["durationStart"];
    //             $durationEnd = $row["durationEnd"];
    //             $source = $row["source"];
    //             $destination = $row["destination"];
    //             $transport = $row["transport"];
    //             $pkgPrice = $row["pkgPrice"];
    //             $mealPrice = $row["mealPrice"];
    //             $Accommodation = $row["Accommodation"];
    //             // $_SESSION['userid'] = $row['userid'];
    //             // echo "<table class=\"text-center ml-auto mr-auto\">
    //             // <tr class=\"row\">
    //             // <th class=\"col\">durationStart</th>
    //             // <th class=\"col\">durationEnd</th>
    //             // <th class=\"col\">source</th>
    //             // <th class=\"col\">destination</th>
    //             // <th class=\"col\">transport</th>
    //             // <th class=\"col\">pkgPrice</th>
    //             // <th class=\"col\">mealPrice</th>
    //             // <th class=\"col\">Accommodation</th>
    //             // </tr>";
    //             // echo "<tr class=\"row\">";
    //             // echo "<td class=\"col\">" .$row['durationStart']."</td>";
    //             // echo "<td class=\"col\">" .$row['durationEnd']."</td>";
    //             // echo "<td class=\"col\">" .$row['source']."</td>";
    //             // echo "<td class=\"col\">" .$row['destination']."</td>";
    //             // echo "<td class=\"col\">" .$row['transport']."</td>";
    //             // echo "<td class=\"col\">" .$row['pkgPrice']."</td>";
    //             // echo "<td class=\"col\">" .$row['mealPrice']."</td>";
    //             // echo "<td class=\"col\">" .$row['Accommodation']."</td>";
    //             // echo "</tr>";
    //             // echo "</table>";
    //             }
    //         } 
    // else {
    //   $error=mysqli_error($conn);
    //     //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
    //     echo "<script>alert('Unable to fetch packages !".$error."');</script>";
    // }
    
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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="1paperkit/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="1paperkit/assets/css/paper-kit.css" rel="stylesheet" />
  <!-- <link href="1paperkit/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="1paperkit/assets/demo/demo.css" rel="stylesheet" />
  <!-- <script defer src="fontawesome/js/all.js"></script>  -->
  <script src="https://kit.fontawesome.com/f2377dc66c.js" crossorigin="anonymous"></script>
  <!--load all styles -->
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
 
<!-- place your content under this div -->

<div class="container-fluid">
    <div class="section row">

      <?php 
        $pkgDetails=mysqli_query($conn, $pkg);
        $count=mysqli_num_rows($pkgDetails);
        // echo "row ".$count;
            if ( $count > 0) {
                      $rownum=0;
                      $tmp=0;
                      $row = mysqli_fetch_all($pkgDetails,MYSQLI_ASSOC);
                      // echo "<form method=\"POST\" class=\"row\" action=\"tripcreation.php\" enctype=\"multipart/form-data\">";
                      while($count>0) {
                        $pkgid = $row[$rownum]["pkgid"];
                        $pkgids[] = $row[$rownum]["pkgid"];
                        // $_SESSION['pkgid']=$row["pkgid"];
                        // $pkgType = $row["pkgType"];
                        $durationStart = $row[$rownum]["durationStart"];
                        $durationEnd = $row[$rownum]["durationEnd"];
                        $source = $row[$rownum]["source"];
                        $destination = $row[$rownum]["destination"];
                        $transport = $row[$rownum]["transport"];
                        $pkgPrice = $row[$rownum]["pkgPrice"];
                        $mealPrice = $row[$rownum]["mealPrice"];
                        $Accommodation = $row[$rownum]["Accommodation"];
                        $img =str_ireplace("C:/xampp/htdocs/TMS/dummytests/pkgStock","pkgStock",$row[$rownum]["img"]);
                        // echo "<script>alert('image found ! ".$img."');</script>";
                        // card contents
                        // echo "<form method=\"POST\" class=\"row\" action=\"tripcreation.php\" enctype=\"multipart/form-data\">";
                          if($destination=="Himachal"){ ?>
                                <div class="form-group card ml-auto mr-auto" style="width: 20rem;">
                                  <img class="card-img-top" src="<?php echo $img;?>" alt="Card image cap">
                                  <div class="card-body">
                                    <h4 class="card-title">from <i class="text-success fas fa-map-marker-alt"></i> <?php echo $source; ?><br/>to <i class="text-success ml-3 fas fa-map-marker-alt"></i> <?php echo $destination; ?></h4>
                                    <h6 class="card-subtitle mb-2 text-muted"><i class="text-success far fa-calendar-alt"></i> <?php echo $durationStart;?> to <?php echo $durationEnd ;?></h6>
                                    <p class="card-text">The package price: <i class="text-success fas fa-rupee-sign"></i> <?php echo $pkgPrice;?><br/>Meal offerings <i class="text-success fas fa-rupee-sign"></i> <?php echo $mealPrice;?></p>
                                    <p class="card-text"><i class="text-success fas fa-hotel"></i> <?php echo $Accommodation;?></p>
                                    <p class="card-text"><small class="text-muted"><i class="text-success far fa-compass"></i> via<?php echo $transport;?></small></p>
                                    <!--<a href=\"#\" class=\"btn btn-outline-success btn-round\"><i class=\"fas fa-2x fa-concierge-bell\"></i> Select Package</a>-->
                                    <!--<form method=\"POST\" action=\"createtrip.php\" enctype=\"multipart/form-data\">
                                    <a href=\"#\" type=\"submit\" id=\"gtrip\" name=\"gtrip\" class=\"text-info mx-auto btn btn-outline-info btn-round punchline block__link px-2\" onclick=\"groupbtn('".$pkgid."')\"><i class=\"fas fa-lg fa-users mr-1\"></i>Group Trip</a>
                                    <a href=\"#\" type=\"submit\" id=\"strip\" name=\"strip\" class=\"mx-auto btn btn-outline-primary btn-round text-primary punchline px-2 block__link\" onclick=\"solobtn('".$pkgid."')\"><i class=\"nc-icon nc-headphones mr-1\" aria-hidden=\"true\"></i> Solo Trip</a>   
                                    </from>-->

                                    <form method="POST" class="row" action="tripcreation.php" enctype="multipart/form-dat">
                                    <input type="hidden" name="userid" value='<?php echo htmlentities($_SESSION['userid']);?>'>
                                    <input type="hidden" name="rowcount" value='<?php echo htmlentities(mysqli_num_rows($pkgDetails));?>'>
                                    <input type="hidden" name="pkgids" value=" <?php print_r(base64_encode(serialize($pkgids))); ?>">
                                    <input type="hidden" name="gtrip" value="gtrip">
                                    <button type="submit" id="gtrip" name="gtrip_btn<?php echo $tmp;?>" class="disabled mx-auto btn btn-outline-default punchline block__link btn-round px-2"><i class="fas fa-lg fa-users mr-1"></i>Group Trip</button>  
                                    <!--</from>-->
                                    <!-- submit button-->
                                    <!--<form method=\"POST\" action=\"strip.php\" enctype=\"multipart/form-data\">
                                    <input type=\"hidden\" name=\"userid\" value='".htmlentities($_SESSION['userid'])."'>
                                    <input type=\"hidden\" name=\"pkgid\" value='".htmlentities($row["pkgid"])."'>-->
                                    <input type="hidden" name="strip" value="strip">
                                    <button type="submit" id="strip" name="strip_btn<?php echo $tmp++;?>" class="disabled mx-auto btn btn-round btn-outline-default punchline px-2 block__link"><i class="nc-icon nc-headphones mr-1" aria-hidden="true"></i> Solo Trip</button>   
                                    </from>
                                  </div>
                                </div>
                          <?php  }
                          else{
                              // $server='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) >';
                             // <div class=\"form-group card ml-auto mr-auto\" style=\"width: 20rem;\">
                          ?>
                                  <div class="form-group card ml-auto mr-auto" style="width: 20rem;">
                                  <img class="card-img-top" src="<?php echo $img;?>" alt="Card image cap">
                                  <div class="card-body">
                                    <h4 class="card-title">from <i class="text-success fas fa-map-marker-alt"></i> <?php echo $source; ?><br/>to <i class="text-success ml-3 fas fa-map-marker-alt"></i> <?php echo $destination; ?></h4>
                                    <h6 class="card-subtitle mb-2 text-muted"><i class="text-success far fa-calendar-alt"></i> <?php echo $durationStart;?> to <?php echo $durationEnd ;?></h6>
                                    <p class="card-text">The package price: <i class="text-success fas fa-rupee-sign"></i> <?php echo $pkgPrice;?><br/>Meal offerings <i class="text-success fas fa-rupee-sign"></i> <?php echo $mealPrice;?></p>
                                    <p class="card-text"><i class="text-success fas fa-hotel"></i> <?php echo $Accommodation;?></p>
                                    <p class="card-text"><small class="text-muted"><i class="text-success far fa-compass"></i> via<?php echo $transport;?></small></p>
                                    <!--<a href=\"#\" class=\"btn btn-outline-success btn-round\"><i class=\"fas fa-2x fa-concierge-bell\"></i> Select Package</a>-->
                                    <!--<form method=\"POST\" action=\"createtrip.php\" enctype=\"multipart/form-data\">
                                    <a href=\"#\" type=\"submit\" id=\"gtrip\" name=\"gtrip\" class=\"text-info mx-auto btn btn-outline-info btn-round punchline block__link px-2\" onclick=\"groupbtn('".$pkgid."')\"><i class=\"fas fa-lg fa-users mr-1\"></i>Group Trip</a>
                                    <a href=\"#\" type=\"submit\" id=\"strip\" name=\"strip\" class=\"mx-auto btn btn-outline-primary btn-round text-primary punchline px-2 block__link\" onclick=\"solobtn('".$pkgid."')\"><i class=\"nc-icon nc-headphones mr-1\" aria-hidden=\"true\"></i> Solo Trip</a>   
                                    </from>-->

                                    <form method="POST" class="row" action="tripcreation.php" enctype="multipart/form-dat">
                                    <input type="hidden" name="userid" value='<?php echo htmlentities($_SESSION['userid']);?>'>
                                    <input type="hidden" name="rowcount" value='<?php echo htmlentities(mysqli_num_rows($pkgDetails));?>'>
                                    <input type="hidden" name="pkgids" value=" <?php print_r(base64_encode(serialize($pkgids))); ?>">
                                    <input type="hidden" name="gtrip" value="gtrip">
                                    <button type="submit" id="gtrip" name="gtrip_btn<?php echo $tmp;?>" class="mx-auto btn btn-outline-info punchline block__link btn-round px-2"><i class="fas fa-lg fa-users mr-1"></i>Group Trip</button>  
                                    <!--</from>-->

                                    <!--<form method=\"POST\" action=\"strip.php\" enctype=\"multipart/form-data\">
                                    <input type=\"hidden\" name=\"userid\" value='".htmlentities($_SESSION['userid'])."'>
                                    <input type=\"hidden\" name=\"pkgid\" value='".htmlentities($row["pkgid"])."'>-->
                                    <input type="hidden" name="strip" value="strip">
                                    <button type="submit" id="strip" name="strip_btn<?php echo $tmp++;?>" class="mx-auto btn btn-outline-primary btn-round punchline px-2 block__link"><i class="nc-icon nc-headphones mr-1" aria-hidden="true"></i> Solo Trip</button>   
                                    </from>

                                  </div>
                                </div>
                          <?php  }
                        
                          // echo "</from>";
                          $rownum++;
                          $count--;
                        }//end of while
                        // echo "</from>";
            }//end of if 
            else {
              $error=mysqli_error($conn);
                //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                echo "<script>alert('Unable to fetch packages !".$error."');</script>";
            }


      ?>
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


</div> <!--end of contents -->

    <!-- imagr reveal -->



  <!-- </main> -->


    <footer class="footer footer-black  footer-white">
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
    <script>
                                    // if(array_key_exists('gtrip', $_POST)) { 
                                    //     groupbtn(); 
                                    // } 
                                    // else if(array_key_exists('strip', $_POST)) { 
                                    //     solobtn(); 
                                    // } 
                                    // function groupbtn(parameter) { 
                                    //   // var x=parameter;
                                    //     alert('This is grpbtn that is selected '+parameter);
                                    //     sessionStorage.setItem('gtrip',parameter);
                                    //     window.location.href = "gtrip.php";
                                        
                                    // } 
                                    // function solobtn(parameter) {
                                    //   // var x=parameter; 
                                    //     alert('This is solobtn that is selected'+parameter);
                                    //     sessionStorage.setItem('strip',parameter);
                                    //     window.location.href = "strip.php";
                                        
                                    // };
                                 //    function groupbtn(parameter) {
                                 //      $.ajax({
                                 //           type: "POST",
                                 //           url: 'http://localhost/TMS/dummytests/gtrip.php',
                                 //           data:{triptype:'gtrip';
                                 //                  pkgid: parameter;
                                 //                },
                                 //           success:function(html) {
                                 //             alert(html);
                                 //           }

                                 //      });
                                 // }
    </script>
    <script src="ImageRevealHover/js/charming.min.js"></script>
    <script src="ImageRevealHover/js/imagesloaded.pkgd.min.js"></script>
    <script src="ImageRevealHover/js/TweenMax.min.js"></script>
    <script src="ImageRevealHover/js/demo.js"></script>
</body>

</html>
