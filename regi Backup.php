
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="uname" class="form-control" placeholder="Enter your name here">
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="email" class="form-control" placeholder="Enter your Mail here">
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="Contact_no" class="form-control" placeholder="Enter your contact information here">
                <span class="help-block"></span>
            </div> 
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="uidai" class="form-control" placeholder="Enter your UIDAI here">
                <span class="help-block"></span>
            </div>   
            <div class="form-group ">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your Password here">
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="Re-Enter your name here">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
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
 $username = $_POST["uname"];
 $password = $_POST["password"];
 $Contact_no = $_POST["Contact_no"];
 $email = $_POST["email"];
 $uidai = $_POST["uidai"];
 $confirm_password = $_POST["confirm_password"];

// Create connection
$conn = mysqli_connect($servername, $username1, $password1, $dbname1);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (username,emailid,password,contactno,uidai) values ('".$username."','".$email."','".$password."','".$Contact_no."','".$uidai."')";

//if($username==$password==$email==$confirm_password=="")
if($username=="")
{
    //echo "the user name is =".$username;
    exit();
}

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>