<?php 
session_start();
error_reporting(0);
// extract($_POST);
// $userid=html_entity_decode($_SESSION['userid']);
$userid=$_SESSION['userid'];
echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";


//for db connection
// $pkgid = "<script type='text/javascript'>sessionStorage.getItem('gtrip');</script>";
// echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";<?php 

$pkgid =$_POST['pkgid'];
if(isset($_POST['group_members'])) 
{
    $rowcount = $_POST['rowcount'];
    $i=0;
    $triptype="Group";
    // echo "<script>alert('Total rows ".$rowcount."');</script>";
    while($i<$rowcount){ 
    $group_members[] = $_POST['group'.$i]; 
    $i++;
    }
    foreach ($group_members as $key => $value) {
      # code...
      if(!is_null($value)){
        $final_group_members[]=$value;
        echo "<script>alert('Group member ".$key."->".$value."');</script>";
      }
    }
    // var_dump($final_group_members);
}
    
echo "<script>alert('the selected pkgid ".$pkgid."');</script>";

  

if ($triptype != 'Group') {
      # code...
      $pkgid =$_POST['pkgid'];
      $triptype="Solo";
    }


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
$pkg = "SELECT * FROM package WHERE pkgid='".$pkgid."';";
  
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

    $pkgDetails=mysqli_query($conn, $pkg);
    $count=mysqli_num_rows($pkgDetails);
        // echo "row ".$count;
            if ( $count == 1) {
                      $rownum=0;
                      $row = mysqli_fetch_all($pkgDetails,MYSQLI_ASSOC);
                      // echo "<form method=\"POST\" class=\"row\" action=\"tripcreation.php\" enctype=\"multipart/form-data\">";
                      // while($count>0) {
                        $pkgid = $row[$rownum]["pkgid"];
                        // $pkgids[] = $row[$rownum]["pkgid"];
                        // $_SESSION['pkgid']=$row["pkgid"];
                        // $pkgType = $row["pkgType"];
                        $durationStart = date("d-m-Y",strtotime($row[$rownum]["durationStart"]));
                        $durationEnd = date("d-m-Y",strtotime($row[$rownum]["durationEnd"]));
                        $source = $row[$rownum]["source"];
                        $destination = $row[$rownum]["destination"];
                        $transport = $row[$rownum]["transport"];
                        $pkgPrice = $row[$rownum]["pkgPrice"];
                        $mealPrice = $row[$rownum]["mealPrice"];
                        $Accommodation = $row[$rownum]["Accommodation"];
                        $pkg_meal_Price = $pkgPrice+$mealPrice;
                        $img =str_ireplace("C:/xampp/htdocs/TMS/dummytests/pkgStock","pkgStock",$row[$rownum]["img"]);

                       
                        if($triptype == 'Solo'){
                           $trip = "INSERT INTO trip (tCreatorid,tsource,tdestination,startDate,endDate) values ('".$userid."','".$source."','".$destination."','".$row[$rownum]["durationStart"]."','".$row[$rownum]["durationEnd"]."')";
                           if (mysqli_query($conn, $trip)) {
                               echo "<script>alert('new record added successfully !');</script>";  
                                } 
                                else {
                                    $error=mysqli_error($conn);
                                    //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                    echo "<script>alert('Error in insertion of trip table: +".$error." +');</script>";
                                }  
                           $tripselect="SELECT * FROM trip where tid=(SELECT MAX(tid) FROM trip);";
                           $tripDetails=mysqli_query($conn, $tripselect);

                              if (mysqli_num_rows($tripDetails) == 1) {
                                        while($row = mysqli_fetch_assoc($tripDetails)) {
                                          $tripid = $row['tid'];
                                          $tCreatorid = $row['tCreatorid'];
                                          }

                                          $travel = "INSERT INTO travel (tripid,userid,tcreatorid,tripType,payment) values ('".$tripid."','".$userid."','".$tCreatorid."','".$triptype."','".$pkg_meal_Price."')";

                                          $exp = "INSERT INTO expenses (tripid,userid,accommodationPrice,food,grandTotal) values ('".$tripid."','".$userid."','".$pkgPrice."','".$mealPrice."','".$pkg_meal_Price."')";
                                          if (mysqli_query($conn, $travel)) {
                                               echo "<script>alert('new travel record added successfully !');</script>";  
                                                } 
                                                else {
                                                    $error=mysqli_error($conn);
                                                    //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                                    echo "<script>alert('Error in insertion of travel table: +".$error." +');</script>";
                                                }

                                                if (mysqli_query($conn, $exp)) {
                                               echo "<script>alert('new expenses record added successfully !');</script>";  
                                                } 
                                                else {
                                                    $error=mysqli_error($conn);
                                                    //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                                    echo "<script>alert('Error in insertion of expenses table: +".$error." +');</script>";
                                                } 
                                      } 
                              else {
                                $error=mysqli_error($conn);
                                  //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                  echo "<script>alert('Incorrect trip in details !".$error."');</script>";
                              }
                           
                        // }

                        }



                        elseif($triptype == 'Group'){
                            $trip = "INSERT INTO trip (tCreatorid,tsource,tdestination,startDate,endDate) values ('".$userid."','".$source."','".$destination."','".$row[$rownum]["durationStart"]."','".$row[$rownum]["durationEnd"]."')";
                           if (mysqli_query($conn, $trip)) {
                               echo "<script>alert('new record added successfully !');</script>";  
                                } 
                                else {
                                    $error=mysqli_error($conn);
                                    //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                    echo "<script>alert('Error in insertion of trip table: +".$error." +');</script>";
                                }  
                           $tripselect="SELECT * FROM trip where tid=(SELECT MAX(tid) FROM trip);";
                           $tripDetails=mysqli_query($conn, $tripselect);

                              if (mysqli_num_rows($tripDetails) == 1) {
                                        while($row = mysqli_fetch_assoc($tripDetails)) {
                                          $tripid = $row['tid'];
                                          $tCreatorid = $row['tCreatorid'];
                                          }
                                          // inserting tripcreator details in travel
                                          $travel = "INSERT INTO travel (tripid,userid,tcreatorid,tripType,payment) values ('".$tripid."','".$userid."','".$tCreatorid."','".$triptype."','".$pkg_meal_Price."')";
                                          $exp = "INSERT INTO expenses (tripid,userid,accommodationPrice,food,grandTotal) values ('".$tripid."','".$userid."','".$pkgPrice."','".$mealPrice."','".$pkg_meal_Price."')";
                                          if (mysqli_query($conn, $travel)) {
                                               echo "<script>alert('new travel record added successfully !');</script>";  
                                                } 
                                                else {
                                                    $error=mysqli_error($conn);
                                                    //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                                    echo "<script>alert('Error in insertion of travel table: +".$error." +');</script>";
                                                }

                                                if (mysqli_query($conn, $exp)) {
                                               echo "<script>alert('new expenses record added successfully !');</script>";  
                                                } 
                                                else {
                                                    $error=mysqli_error($conn);
                                                    //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                                    echo "<script>alert('Error in insertion of expenses table: +".$error." +');</script>";
                                                }

                                          // inserting group members intravel table
                                          foreach ($final_group_members as $key => $value) {
                                          # code...
                                          $travel = "INSERT INTO travel (tripid,userid,tcreatorid,tripType,payment) values ('".$tripid."','".$value."','".$tCreatorid."','".$triptype."','".$pkg_meal_Price."')";
                                          $exp = "INSERT INTO expenses (tripid,userid,accommodationPrice,food,grandTotal) values ('".$tripid."','".$value."','".$pkgPrice."','".$mealPrice."','".$pkg_meal_Price."')";
                                          if (mysqli_query($conn, $travel)) {
                                               echo "<script>alert('new travel record added successfully !');</script>";  
                                                } 
                                                else {
                                                    $error=mysqli_error($conn);
                                                    //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                                    echo "<script>alert('Error in insertion of travel table: +".$error." +');</script>";
                                                }

                                                if (mysqli_query($conn, $exp)) {
                                               echo "<script>alert('new expenses record added successfully !');</script>";  
                                                } 
                                                else {
                                                    $error=mysqli_error($conn);
                                                    //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                                    echo "<script>alert('Error in insertion of expenses table: +".$error." +');</script>";
                                                } 
                                              }
                                      } 
                              else {
                                $error=mysqli_error($conn);
                                  //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                                  echo "<script>alert('Incorrect trip in details !".$error."');</script>";
                              }
                          
                           
                           
                        // }

                        }
                }//end of if 
            else {
              $error=mysqli_error($conn);
                //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                echo "<script>alert('Unable to fetch package !".$error."');</script>";
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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">



  <!-- table -->
  <link href="table/assets/css/fresh-bootstrap-table2.css" rel="stylesheet" />
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

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
<?php echo "<div class=\"page-header section-dark\" style=\"background-image: url('".$img."')\"> ";  ?> 
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h4 class="presentation-title" style="font-size: 60"><?php echo $destination; ?></h4>
          <!-- <div class="fog-low">
            <img src="1paperkit/assets/img/fog-low.png" alt=""  Travel Managment System>
          </div>
          <div class="fog-low right">
            <img src="1paperkit/assets/img/fog-low.png" alt="" Get Things done at one step! >
          </div> -->
        </div>
        <h2 class="presentation-subtitle text-center"><?php echo "<i class=\"fas fa-route\"></i>  ".$durationStart." to ".$durationEnd; ?></h2>
      </div>
    </div>
    <!-- <div class="moving-clouds"></div> -->
    <div class="moving-clouds" style="background-image: url('1paperkit/assets/img/clouds.png'); "></div>
  </div>
 




    <div class="section">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title punchline">Stuck at where to go?</h2>
            <p class="description punchline">We have amazing packages for you <?php echo "<h6>".$username."</h6>";  ?>so hurry up go and grab it !.</p>
          </div>
          <div class="col-md-5 ml-auto mr-auto download-area">
            <a href="planningtrip.php" class="btn btn-outline-info btn-round punchline block__link px-2" data-fx="7" data-img="ImageRevealHover/img/47.jpg"><i class="fas fa-lg fa-users mr-1"></i>Packages</a>
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

  //     $(function() {
  //   $alertBtn.click(function () {
  //     alert('getSelections: ' + JSON.stringify($table.bootstrapTable('getSelections')))

  //   })
  // })

      // window.operateEvents = {
      //   'click .like': function (e, value, row) {
      //     alert('You Added the member, row: ' + JSON.stringify(row.userid))
      //     // console.log(value, row, index)
      //   }
      //   // },
      //   // .stringify(row.userid)
      //   // 'click .edit': function (e, value, row, index) {
      //   //   alert('You click edit icon, row: ' + JSON.stringify(row))
      //   //   console.log(value, row, index)
      //   // },
      //   // 'click .remove': function (e, value, row, index) {
      //   //   $table.bootstrapTable('remove', {
      //   //     field: 'name',
      //   //     values: [row.name]
      //   //   })
      //   // }
      // }

      // function operateFormatter(value, row, index) {
      //   return [
      //     '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
      //       '<i class="fas fa-user-plus"></i>',
      //     '</a>',
      //     // '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
      //     //   '<i class="fa fa-edit"></i>',
      //     // '</a>',
      //     // '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
      //     //   '<i class="fa fa-remove"></i>',
      //     // '</a>'
      //   ].join('')
      // }

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


