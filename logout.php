<?php 

// $_SESSION['luname'] = $row['userid'];
session_unset();
session_destroy();
error_reporting(0);
echo "<script>alert('Session value is destroyed');</script>";
header('Location:login2.php');
                  

// echo "<form id=\"login\" action=\"login2.php\" method=\"post\">";
// // foreach ($_POST as $_SESSION['userid']) {
// if($_POST) {
//     echo "<input type=\"hidden\" name=''>";
// }
// echo "<script type=\"text/javascript\">document.getElementById('login').submit();</script>";
                 
// mysqli_close($conn);
?>