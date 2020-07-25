<?php 
session_start();
 error_reporting(0);
extract($_POST);

$rows =$_POST['rowcount'];
// $pkgids =unserialize(base64_decode($_POST['pkgids']));
// $i=0;
// while($rows>=0){
//   if(isset($_POST['gtrip_btn'.$i])) {
//     $pkgid =$pkgids[$i];
//     $triptype = $_POST['gtrip'];
//     $is_group=isset($_POST['gtrip_btn'.$i]);
//     // call removeday() here
//     echo "<script>alert('total rows ".$rows." selected row ".$i." and trip type ".$triptype."');</script>";
//     echo "<script>alert('total pkgids ".implode(",",$pkgids)." and the selected pkgid ".$pkgid."');</script>";

//   }

//   if(isset($_POST['strip_btn'.$i])) {
//     // $rows =$_POST['rowcount'];
//     $pkgid =$pkgids[$i];
//     $triptype = $_POST['strip'];
//     // call removeday() here
//     echo "<script>alert('total rows ".$rows." selected row ".$i." and trip type ".$triptype."');</script>";
//     echo "<script>alert('total pkgids ".implode(",",$pkgids)." and the selected pkgid ".$pkgid."');</script>";

//   }
//   $rows--;
//   $i++;
// }

// $userid=html_entity_decode($_SESSION['userid']);
$userid=$_SESSION['userid'];
// $pkgid = "<script type='text/javascript'>sessionStorage.getItem('gtrip');</script>";
echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";
// echo "<script>alert(sessionStorage.getItem('gtrip'));</script>";


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
$travel ="SELECT * FROM travel WHERE userid='".$userid."';";
// $pkg = "SELECT * FROM package WHERE pkgid='".$pkgid."';";


    
    // $user_group=
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
    require_once('insertexpenses.php');

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



<!-- bootstrap table -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="btable/dist/bootstrap-table.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="btable/dist/bootstrap-table.min.js"></script>
<!-- Latest compiled and minified Locales -->
<script src="btable/dist/locale/bootstrap-table-zh-CN.min.js"></script>

  <!-- table -->
  <link href="table/assets/css/fresh-bootstrap-table2.css" rel="stylesheet" />
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

   <!-- CSS Files --> 
  <link href="1paperkit/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="1paperkit/assets/css/paper-kit.css" rel="stylesheet" />
  <!-- <link href="1paperkit/assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="1paperkit/assets/demo/demo.css" rel="stylesheet" />
  <script defer src="fontawesome/js/all.js"></script> <!--load all styles -->
  <!-- scroll reveal -->
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <script>
        ScrollReveal({ reset: true });
  </script>


  <!-- image reveal -->
  <link rel="stylesheet" type="text/css" href="ImageRevealHover/css/base.css" />
  <link rel="stylesheet" href="https://use.typekit.net/ljn4kgu.css">
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
    <!-- <link href="checkbox/dist/pretty-checkbox.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet" />
     
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
          <h4 class="presentation-title" style="font-size: 60">Expenses</h4>
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

<h2 class="presentation-subtitle text-center">Here are the selected packages </h2>

          <form method="POST" class="container-fluid" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-dat">
              <div class="wrapper">

                <div class="container-fluid">
                  <div class="row">

                    <div class="ml-auto mr-auto">
                      <div class="description mb-4">
                        <h2><?php echo "Hey ".$username." here's your expenses" ?></h2>
                      </div>

                      <div class="fresh-table full-screen-table full-color-green">
                        <!--
                          Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
                          Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
                        -->
                        <div class="bootstrap-table bootstrap3 table-borderless">
                          
                            <div class="toolbar px-2 py-2">
                          <button type="submit" name="exp_btn" id="alertBtn" class="btn btn-default">Add <i class="fas fa-users"></i></button>
                        </div>
                        
                            <table id="fresh-table" data-click-to-select="true" data-editable-emptytext="Default empty text." class="table table-borderless">
                              <thead>
                                <!-- <th data-visible="false"  data-field="id">ID</th> -->
                                <th data-field="expenseid" data-sortable="true">Destination</th>
                                <!-- <th data-field="name" data-sortable="true">Trip id</th> -->
                                <th data-field="accommodationPrice" data-sortable="true"><i class="fas fa-bed fa-2x mr-2"></i> Accommodation</th>
                                <th data-field="tourPrice" data-editable="true" data-sortable="true"><i class="fas fa-road fa-2x mr-2"></i> Tour Price</th>
                                <th data-field="food" data-editable="true" data-sortable="true"><i class="fas fa-utensils fa-2x mr-2"></i>Food</th>
                                <th data-field="movie" data-editable="true" data-sortable="true"><i class="fas fa-film fa-2x mr-2"></i> Movie</th>
                                <th data-field="shopping" data-editable="true" data-sortable="true"><i class="fas fa-shopping-basket fa-2x mr-2"></i>Shopping</th>
                                <th data-field="other" data-editable="true" data-sortable="true"><i class="fas fa-money-bill-wave fa-2x mr-2"></i>Other Expenses</th>
                                <th data-field="grandTotal" data-sortable="true"><i class="fas fa-cash-register fa-2x mr-2"></i>Grand Total</th>
                                <!-- <th data-field="city">City</th> -->
                                <th data-field="state"><i class="far fa-hand-pointer fa-2x mr-2"></i>Actions</th>
                              </thead>
                              <tbody>

                                <?php
                                $tmp=0;

                                $exp ="SELECT e.expenseid, e.tripid, e.userid, e.accommodationPrice, e.tourPrice, e.food, e.movie, e.shopping, e.other, e.grandTotal,t.tdestination FROM expenses e,trip t WHERE e.tripid=t.tid AND e.userid='".$userid."';";
                                $expDetails=mysqli_query($conn, $exp);
                                $ecount=mysqli_num_rows($expDetails);
                                if ( $ecount > 0) {
                                          // echo "row ".$count;
                                              
                                                        

                                                        $exp_candidates = mysqli_fetch_all($expDetails,MYSQLI_ASSOC);
                                                        // echo "<form method=\"POST\" class=\"row\" action=\"tripcreation.php\" enctype=\"multipart/form-data\">";
                                                        // while($ecount>0) {
                                                        foreach ($exp_candidates as $key => $value) {
                                                          # code...
                                                          $expenseid[] = $exp_candidates[$key]["expenseid"];
                                                          $tripid = $exp_candidates[$key]["tripid"];
                                                          $destination[]=$exp_candidates[$key]["tdestination"];
                                                          $userid = $exp_candidates[$key]["userid"];
                                                          $accommodationPrice = $exp_candidates[$key]["accommodationPrice"];
                                                          $tourPrice = $exp_candidates[$key]["tourPrice"];
                                                          $food = $exp_candidates[$key]["food"];
                                                          $movie = $exp_candidates[$key]["movie"];
                                                          $shopping = $exp_candidates[$key]["shopping"];
                                                          $other = $exp_candidates[$key]["other"];
                                                          // $old_grandTotal = $exp_candidates[$key]["grandTotal"];
                                                          $grandTotal = $accommodationPrice+$tourPrice+$food+$movie+$shopping+$other;
                                                        // }
                                                          

                                 
                                
                               ?>
                                                        <tr>
                                                            <td><input class="form-data form-control form-control-success" type="hidden" name="expid<?php echo $tmp;?>" value="<?php echo $expenseid[$tmp];?>"/><?php echo $destination[$tmp] ;?>
                                                            <input class="form-data form-control form-control-success" type="hidden" name="tripid<?php echo $tmp;?>" value="<?php echo $tripid;?>"/>
                                                          </td>
                                                            <!-- <td><?php //echo $tid ;?></td> -->
                                                            <td><?php echo $accommodationPrice ;?><input type="hidden" class="form-data form-control form-control-success"  name="ackmprice<?php echo $tmp;?>" value="<?php echo $accommodationPrice ;
                                                            ?>"/></td>
                                                            <td><input type="text" data-toggle="tooltip" data-placement="left" title="Add + and ammount" class="form-data form-control form-control-success"  name="tourPrice<?php echo $tmp;?>" value="<?php echo $tourPrice."+";?>" placeholder = "<?php echo (isset($tourPrice))?$tourPrice:'Null';?>"><!-- <?php //echo $tourPrice ;?> --></td>
                                                            <td><input type="text" data-toggle="tooltip" data-placement="left" title="Add + and ammount" class="form-data form-control form-control-success" name="food<?php echo $tmp;?>" placeholder = "<?php echo (isset($food))?$food:'Null';?>" value="<?php echo $food."+";?>"><!-- <?php //echo $food ;?> --></td>
                                                            <td><input type="text" data-toggle="tooltip" data-placement="left" title="Add + and ammount" class="form-data form-control form-control-success"  name="movie<?php echo $tmp;?>" placeholder = "<?php echo (isset($movie))?$movie:'Null';?>" value="<?php echo $movie."+" ;?>"><!-- <?php// echo $movie ;?> --></td>
                                                            <td><input type="text" data-toggle="tooltip" data-placement="right" title="Add + and ammount" class="form-data form-control form-control-success"  name="shopping<?php echo $tmp;?>" placeholder = "<?php echo (isset($shopping))?$shopping:'Null';?>" value="<?php echo $shopping."+" ;?>"><!-- <?php //echo $shopping ;?> --></td>
                                                            <td><input type="text" data-toggle="tooltip" data-placement="right" title="Add + and ammount" class="form-data form-control form-control-success" name="other<?php echo $tmp;?>" placeholder = "<?php echo (isset($other))?$other:'Null';?>" value="<?php echo $other."+" ;?>"><!-- <?php //echo $other ;?> --></td>
                                                            <td><?php echo $grandTotal;?><input type="hidden" class="form-data form-control form-control-success"  name="gt<?php echo $tmp;?>" value="<?php echo $old_grandTotal;?>"/></td>
                                                            <!-- <td>Niger</td>
                                                            <td>Oud-Turnhout</td>-->
                                                            <td><div class="form-data form-group pretty p-icon p-curve p-tada p-plain p-pulse p-toggle">
                                                                    <input class="form-data" type="checkbox" name="chk[]" value="<?php echo $tmp2;?>"/>
                                                                    <div class="pretty state p-on p-icon p-curve p-jelly">
                                                                        <!-- <i class="icon fas fa-user-plus"></i> -->
                                                                        <i class="icon fas fa-check-double"></i>
                                                                        <label>Done!</label>
                                                                    </div>
                                                                    <div class="state p-off">
                                                                        <!-- <i class="icon fas fa-user-plus"></i> -->
                                                                        <label class="text-light">Send</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                          </tr>

                                <?php
                                                          // }//end of if admin
                                                          // $rownum++;
                                                          // $ecount--;
                                                          // $tmp++;
                                                          // $tmp2++;
                                                        }//end of foreach
                                                        // $tmp++;
                                                        
                                              }//end of if count
                                              else {
                                                $error=mysqli_error($conn);
                                                  //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                                  echo "<script>alert('Unable to fetch expenses !".$error."');</script>";
                                              } 

                                             // $tmp2++;
                                // }


                                ?>
                                <!--<tr>
                                  <td>2</td>
                                  <td>Minerva Hooper</td>
                                  <td>$23,789</td>
                                  <td>Curaçao</td>
                                  <td>Sinaai-Waas</td>
                                  <td></td>-->
                                
                              </tbody>
                            </table>

                                                                   
                                                                    <!-- <input class="form-data" type="hidden" name="expid" value="<?php// echo $expenseid ;?>"/> -->
                                                                    <input class="form-data" type="hidden" name="userid" value="<?php echo htmlentities($_SESSION['userid']);?>"/>
                                                                    <input class="form-data" type="hidden" name="rowcount" value="<?php echo $tmp;?>"/>
                                                                    <input class="form-data" type="hidden" name="tripid_arr" value="<?php echo $tripid_arr;?>"/>
                                                                    <input class="form-data form-control form-control-success" type="hidden" name="old_grandTotal<?php echo $tmp;?>" value="<?php echo $old_grandTotal;?>"/>
                                                                    
                                                                    <!-- <button type="submit" id="strip" name="strip_btn" class="mx-auto btn btn-outline-primary btn-round punchline px-2 block__link"><i class="nc-icon nc-headphones mr-1" aria-hidden="true"></i> Solo Trip</button> -->
                          
                        </div>
                        
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </form>


    <div class="section">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title punchline">Changed your mind?</h2>
            <p class="description punchline">No Biggie.. <?php echo "<h6>".$username." </h6>";  ?>hurry up Pick again :)</p>
          </div>
          <div class="col-md-5 ml-auto mr-auto download-area">
            <a href="planningtrip.php" class="btn btn-outline-info btn-round punchline block__link px-2" data-fx="7" data-img="ImageRevealHover/img/47.jpg"><i class="far fa-lg fa-compass"></i>Packages</a>
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
            <p class="description punchline">That's Great <?php echo "<h6>".$username." !  now you can Pay for the Expenses.</h6>";  ?></p>
          </div>
          <div class="col-md-5 ml-auto mr-auto download-area">
            <a href="TxnTest.php" name="paytm_btn" type="submit" class="btn btn-outline-info btn-round punchline block__link px-2" data-fx="7" data-img="ImageRevealHover/img/49.jpg"><img src="paytm_1220356.png" style="height: 50px;  width: 80px;"></a>
          </div>
        </div>
        
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
        function scrollToDownload() {

          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }


      ScrollReveal().reveal('.punchline', { delay: 200 });
    </script>

    <script src="ImageRevealHover/js/charming.min.js"></script>
    <script src="ImageRevealHover/js/imagesloaded.pkgd.min.js"></script>
    <script src="ImageRevealHover/js/TweenMax.min.js"></script>
    <script src="ImageRevealHover/js/demo.js"></script>

    <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

  <script type="text/javascript">
      var $table = $('#fresh-table')
      var $alertBtn = $('#alertBtn')

 

      $(function () {
        $table.bootstrapTable({
          classes: 'table table-hover table-striped',
          toolbar: '.toolbar',

          search: true,
          showRefresh: true,
          showToggle: true,
          // showColumns: true,
          pagination: true,
          striped: true,
          sortable: true,
          pageSize: 8,
          pageList: [8, 10, 25, 50, 100],

          formatShowingRows: function (pageFrom, pageTo, totalRows) {
            return ''
          },
          formatRecordsPerPage: function (pageNumber) {
            return pageNumber + ' rows visible'
          }
        })

        // $alertBtn.click(function () {
        //   alert('You pressed on Alert')
        // })
      })

  </script>

</body>

</html>
