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
$newpass=$_POST["newpass"];
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
$query="update signup set password='".$newpass."' where email_id='".$_SESSION['email_id']."'";
$result=mysql_query($query) or die(mysql_error());
	 if(!$result)
{		
echo mysql_error();
}
else
{

//echo $query;
//printf("<script>location.href='../main/main.php'</script>");
echo "<script>alert('Password Changed Successfully'); window.location = 'main.php';</script>";
} 
}

?>