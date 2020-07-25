<?php 

// $_SESSION['luname'] = $row['userid'];

session_start();
$_SESSION['userid'] = "";



error_reporting(0);
//for db connection

$servername = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "dtms";
//$REQUEST_URI="http://localhost/TMS/dummytests/createprofile.html";
//for form handling
 $luname = $_POST["luname"];
 $lpassword = $_POST["lpassword"];
 $userid='';
 $admin='Admin';
 $username='';
// Create connection
$conn = mysqli_connect($servername, $username1, $password1, $dbname1);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT userid,username,emailid,password,contactno,uidai FROM user WHERE username='".$luname."' AND password='".$lpassword."';";


if(isset($_POST['btn_log_in'])) { 
    // echo "<script>alert('This is Login that is selected');</script>"; 
    
    $userDetails=mysqli_query($conn, $sql);

    if (mysqli_num_rows($userDetails) == 1) {
              while($row = mysqli_fetch_assoc($userDetails)) {
                $_SESSION['userid'] = $row['userid'];
                $username = $row['username'];
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
} 
if (isset( $_SESSION['userid'] ) && $_SESSION['userid']!='' ) {
                    // Grab user data from the database using the user_id
                    // Let them access the "logged in only" pages

                  if ( $username == $admin)
                  {
                      echo "<script>alert('Session value is ".$_SESSION['userid']."');</script>";
                    //echo "Session value is ".$_SESSION['userid'];
                    //$page = $_SERVER['REQUEST_URI'];


                    echo "<form id=\"login\" action=\"Addpackage.php\" method=\"post\">";
                    // foreach ($_POST as $_SESSION['userid']) {
                    if($_POST) {
                        echo "<input type=\"hidden\" name='".htmlentities($_SESSION['userid'])."'>";
                    }
                    echo "<script type=\"text/javascript\">document.getElementById('login').submit();</script>";
                  }

                  else{
                      echo "<script>alert('Session value is ".$_SESSION['userid']."');</script>";
                    //echo "Session value is ".$_SESSION['userid'];
                    //$page = $_SERVER['REQUEST_URI'];

                    //creating virtual form...paste this code at the bottom where the insertion query for package is written in the php file...
                    echo "<form id=\"login\" action=\"welcome.php\" method=\"post\">";
                    // foreach ($_POST as $_SESSION['userid']) {
                    if($_POST) {
                        echo "<input type=\"hidden\" name='".htmlentities($_SESSION['userid'])."'>";
                    }
                    echo "<script type=\"text/javascript\">document.getElementById('login').submit();</script>";
                    
                    // echo '<script type="text/javascript">';
                    // echo 'window.location.href="http://localhost/TMS/dummytests/createprofile.php";';
                    // echo '</script>';
                    //exit;
                  }

                  
                } 
mysqli_close($conn);
?>