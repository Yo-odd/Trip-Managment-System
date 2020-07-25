<?php 
// session_start();
// error_reporting(0);
extract($_POST);
// $userid=html_entity_decode($_SESSION['userid']);
$userid=$_SESSION['userid'];
// echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";


//for db connection
// $pkgid = "<script type='text/javascript'>sessionStorage.getItem('gtrip');</script>";
// echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";<?php 

// $expenseid =$_POST['expenseid'];

    // var_dump($final_group_members);

    
// echo "<script>alert('the selected expenseid ".$expenseid."');</script>";

  



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
// $pkg = "SELECT * FROM package WHERE pkgid='".$pkgid."';";

    // $user_group=
    $userDetails=mysqli_query($conn, $sql);

    if (mysqli_num_rows($userDetails) == 1) {
              while($row = mysqli_fetch_assoc($userDetails)) {
                $username = $row["username"];
                // $password = $row["password"];
                // $Contact_no = $row["Contact_no"];
                // $email = $row["email"];
                // $uidai = $row["uidai"];
                $_SESSION['userid'] = $row['userid'];
                }
            } 
    else {
      $error=mysqli_error($conn);
        //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('Incorrect log in details !".$error."');</script>";
    }


    if(isset($_POST['rowcount'])) 
{
    $rowcount = $_POST['rowcount'];
    $chk[]=$_POST['chk'];
    // $chk[]=$_POST['tripid_arr'];
    $i=0;
    // $triptype="Group";
    // echo "<script>alert('Total rows ".$rowcount." checkbox ".print_r($_POST['chk'])."');</script>";
    foreach ($chk as $key => $value) {
      # code...
        // echo "<script>alert('".$_POST['expid'.$i]."->".$_POST['ackmprice'.$i]."->".$_POST['tourPrice'.$i]."->".$_POST['food'.$i]."->".$_POST['movie'.$i]."->".$_POST['shopping'.$i]."->".$_POST['other'.$i]."->".$_POST['gt'.$i]."');</script>";
    echo "<script>alert('selected row ".$key." checkbox ".$value."');</script>";
    // if($key<$rowcount){
     // echo "<script>alert('".$_POST['expid'.$i]."->".$_POST['ackmprice'.$i]."->".$_POST['tourPrice'.$i]."->".$_POST['food'.$i]."->".$_POST['movie'.$i]."->".$_POST['shopping'.$i]."->".$_POST['other'.$i]."->".$_POST['gt'.$i]."');</script>";

      



    $expenseid[] = $_POST['expid'.$i]; 
    $tripid[] = $_POST['tripid'.$i]; 
    $ackmprice[] =$_POST['ackmprice'.$i];  
    // $tourPrice[] =(!isset($_POST['tourPrice'.$i])) ? $_POST['tourPrice'.$i] : 0 ;  
    // $food[] =(!is_null($_POST['food'.$i])) ? $_POST['food'.$i] : 0 ;  
    // $movie[] =(!is_null($_POST['movie'.$i])) ? $_POST['movie'.$i] : 0 ;  
    // $shopping[] =(!is_null($_POST['shopping'.$i])) ? $_POST['shopping'.$i] : 0 ;  
    // $other[] =(!is_null($_POST['other'.$i])) ? $_POST['other'.$i] : 0 ;  
    // substr("testers", -1);substr_replace($string ,"", -1);
    $tourPrice[] =(substr($_POST['tourPrice'.$i],-1)!='+') ? $_POST['tourPrice'.$i] :substr_replace($_POST['tourPrice'.$i] ,"", -1) ;  
    $food[] =(substr($_POST['food'.$i],-1)!='+') ? $_POST['food'.$i] :substr_replace($_POST['food'.$i] ,"", -1);  
    $movie[] =(substr($_POST['movie'.$i],-1)!='+') ? $_POST['movie'.$i] :substr_replace($_POST['movie'.$i] ,"", -1) ;  
    $shopping[] =(substr($_POST['shopping'.$i],-1)!='+') ? $_POST['shopping'.$i] :substr_replace($_POST['shopping'.$i] ,"", -1) ;  
    $other[] =(substr($_POST['other'.$i],-1)!='+') ? $_POST['other'.$i] :substr_replace($_POST['other'.$i] ,"", -1);  
    // $gt[] = $_POST['gt'.$i];
    // $old_gt[]=$_POST['old_grandTotal'.$i];
    $GrandTotal=$ackmprice[$i]+$tourPrice[$i]+$food[$i]+$movie[$i]+$shopping[$i]+$other[$i];
 
    echo "<script>alert('".$expenseid[$i]."->".$ackmprice[$i]."->".$tourPrice[$i]."->".$food[$i]."->".$movie[$i]."->".$shopping[$i]."->".$other[$i]."->".$GrandTotal."');</script>";
    // $exp ="UPDATE expenses SET tourPrice=".$o_tourPrice+$tourPrice[$i].",food=".$o_food+$food[$i].",movie=".$o_movie+ $movie[$i].",shopping=".$o_shopping+ $shopping[$i].",other=".$o_other+ $other[$i].",grandTotal=".$GrandTotal." WHERE expenseid='".$expenseid[$i]."';";
     $exp ="UPDATE expenses SET tourPrice=".$tourPrice[$i].",food=".$food[$i].",movie=".$movie[$i].",shopping=".$shopping[$i].",other=".$other[$i].",grandTotal=".$GrandTotal." WHERE expenseid='".$expenseid[$i]."';";
    // if(!is_null($expenseid[$i])){
        if (mysqli_query($conn, $exp)) {
                       echo "<script>alert('new record Updated successfully !');</script>";  
                        } 
                        else {
                            $error=mysqli_error($conn);
                            //$dummy="Error: " . $sql . "<br>" . mysqli_error($conn);
                            echo "<script>alert('Error in Modifications for expense update: ".$error."');</script>";
                        } 
        // }
    
    // }
    $i++;
    }    

    }//end of rowcount

    

    // $expDetails=mysqli_query($conn, $exp);
    // $count=mysqli_num_rows($expDetails);
        // echo "row ".$count;
           
?>

