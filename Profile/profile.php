<?php
// Inialize session
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Educare|Edit Profile</title>
</head>
<body>
<?php

$Country=$_POST["country"];
$City=$_POST["city"];
$School = $_POST["school"];
$College = $_POST["college"];

$Qualification =$_POST["Qualification"];
$Occupation =$_POST["occupation"];
$Interest=$_POST["interest"];
$Idol=$_POST["Idol"];




$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
//$query1="select p_id from profile";
//$result=mysql_query($query1);

//$num=mysql_numrows($result);
//echo $num;
//$p_id=mysql_result($result,($num-1),"p_id");
//echo $p_id;
//$new_p_id=$p_id + 1;
//echo new_p_id;
//mysql_close();
//echo mysql_query($query1);


$query="update profile set Country='".$Country."',City='".$City."',School='".$School."',College='".$College."',Qualification='".$Qualification."',Occupation='".$Occupation."',Interest='".$Interest."',Idol='".$Idol."' where email_id='".$_SESSION['email_id']."'";

$result=mysql_query($query) or die(mysql_error());
echo "hi";
	 if(!$result)
{		
echo mysql_error();
}
else
{
//echo $query;
printf("<script>location.href='../main/main.php'</script>");
} 
	 
?>