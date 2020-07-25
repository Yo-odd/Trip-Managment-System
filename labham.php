<?php
session_start();
error_reporting(0);
// extract($_POST);
$userid=$_SESSION['userid'];
$i=0;
// $pkgid = "<script type='text/javascript'>sessionStorage.getItem('gtrip');</script>";
echo "<script>alert('Session value in current page is ".$userid." and ".$_SESSION['userid']."');</script>";
if(isset($_POST['group_members'])) 
{
    $rowcount = $_POST['rowcount'];
    // echo "<script>alert('Total rows ".$rowcount."');</script>";
    while($i<$rowcount){ 
    $group_members[] = $_POST['group'.$i]; 
    $i++;
    }
    var_dump($group_members);
}

if(isset($_POST['group_members'])) 
{
    $rowcount = $_POST['rowcount'];
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
    var_dump($final_group_members);
}

if(isset($_POST['submit'])) 
{ 
    
    // echo $dummy;
    for ($i=1; $i<5; $i++)
{
	$dummy="field";
	$field=$_POST['field'.$i];
    if($field != '')
    {
        // error - doesn't have a value
        echo $field;
    }
    // $i++;
    // $dummy="field";
    // $dummy.=$i;
}

}
?>
<html>
    <head>
        
    </head>
    <body>
<?php 
$i=1;
while($i<5){

echo "<form method=\"post\" action=\"labham.php\">

<input type=\"hidden\" name=\"field".$i."\" value=\"".$i."\"/>
<input type=\"submit\" name=\"submit\" value=\"Submit Form\"><br>

</form>";
$i++;
}

 ?>


<!-- <input type=\"hidden\" name=\"field2\" value=\"2\"/>
<input type=\"hidden\" name=\"field3\" value=\"3\"/> -->

</body>
</html>