<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>

<?php 
session_start();
 error_reporting(0);
extract($_POST);


$userid=$_SESSION['userid'];
// $pkgid = "<script type='text/javascript'>sessionStorage.getItem('gtrip');</script>";
echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";
// echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";
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
   
    // }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
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


	<h1 class="presentation-subtitle text-center text-muted">Merchant Check Out Page</h1>
	<pre>
	</pre>
	<form class="container-fluid table-borderless" method="post" action="pgRedirect.php">
			<div class="wrapper">

                <div class="container-fluid table-borderless">
                  	<div class="row table-borderless">

	                    <div class="col-8 ml-auto mr-auto">
	                      <div class="description mb-4">
	                        <h2><?php echo "Hey ".$username." here's your PaymenDetails" ?></h2>
	                      </div>

	                      	<!-- <div > -->
									                        <!--
									                          Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
									                          Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
									                        -->
		                        <div class="bootstrap-table bootstrap3 table-borderless">
									                        
					                            <table id="fresh-table" class="fresh-table full-screen-table full-color-blue text-azure" border="1">
													<tbody>
														<tr>
															<th class="text-light">S.No</th>
															<th class="text-light">Label</th>
															<th class="text-light">Value</th>
														</tr>
														<tr>
															<td class="text-light">1</td>
															<td class="text-light"><label>Transaction_ID::*</label></td>
															<td><input class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
																name="ORDER_ID" autocomplete="off"
																value="<?php echo  "ORDS" . rand(10000,99999999)?>">
															</td>
														</tr>
														<tr>
															<td class="text-light">2</td>
															<td class="text-light"><label>USERID ::*</label></td>
															<td><input class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
														</tr>
														<tr>
															<td class="text-light">3</td>
															<td class="text-light"><label>Exp_ID ::*</label></td>
															<td><input class="form-control" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
														</tr>
														<tr>
															<td class="text-light">4</td>
															<td class="text-light"><label>Destination ::*</label></td>
															<td><input class="form-control" id="CHANNEL_ID" tabindex="4" maxlength="12"
																size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
															</td>
														</tr>
														<tr>
															<td class="text-light">5</td>
															<td class="text-light"><label>txnAmount*</label></td>
															<td><input class="form-control" title="TXN_AMOUNT" tabindex="10"
																type="text" name="TXN_AMOUNT"
																value="1">
															</td>
														</tr>
														<tr>
															<td class="text-light"></td>
															<td class="text-light"></td>
															<td><input class="btn btn-outline-info" value="CheckOut" type="submit"	onclick=""></td>
														</tr>
													</tbody>
												</table>
											<p class="h6 text-light ml-3">* - Mandatory Fields</p>
					                          
                        		</div>
					                        
				        	<!-- </div> -->

                    	</div>
                  	</div>
                </div>
          	</div>
		
	</form>


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

