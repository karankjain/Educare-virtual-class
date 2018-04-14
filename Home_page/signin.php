<?php
// Inialize session
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

$connect=mysql_connect("localhost","root","admin") or die("connnection failed");

 
mysql_select_db("educare") or die(mysql_error());
$query='select email_id,password from signup where email_id="'.$email.'" and password="'.$password.'"';
$result=mysql_query($query);
 $num=mysql_numrows($result);
  if(!$result)
{		
  echo mysql_error();
 //printf("<script>location.href='signinval.php'</script>");
}
elseif( $num == 1)
{
// echo "Inserted Successfully";
  $_SESSION['email_id'] = $_POST['email'];
 printf("<script>location.href='../main/main.php'</script>");
}
else
{ 
//include 'home.php';
 printf("<script>location.href='signinval.php'</script>");
//echo "<script language=javascript>alert('Please enter a valid username.')</script>";
 

} 

 ?>