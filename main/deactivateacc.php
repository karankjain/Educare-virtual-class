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
$currpass=$_POST["currpass"];
$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
$query="select password from signup where email_id='".$_SESSION['email_id']."'";
$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
while($row = mysql_fetch_array($result))
{
$currentPassword = $row['password'];
}
if($currpass==$currentPassword)
{
$query="delete from signup,profile using signup inner join profile where signup.signup_id=profile.p_id and  signup.email_id='".$_SESSION['email_id']."'";
$result=mysql_query($query) or die(mysql_error());
	 if(!$result)
{		
echo mysql_error();
}
else
{
//echo $query;
echo "<script>alert('Account Deactivated Successfully'); window.location = 'logout.php';</script>";
} 
}
else
{
echo "<script>alert('Wrong Password'); window.location = 'deactivate.php';</script>";
} 
?>