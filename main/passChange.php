<?php
// Inialize session
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Change Password</title>
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <link rel="stylesheet" type="text/css" href="../menubar.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
</head>
<body class="signup_main_body">
<div class="drop_panel">
<ul style="position:relative; top:6pt; left:-20pt;">
<li style="display:inline;">Logged in as <b><?php echo $_SESSION['email_id']; ?></b></li>
<li style="display:inline;float:right; margin-right:15px; ">
<a class="menu" href="../main/logout.php"><b>Logout</b></a></li>
<li style="display:inline;float:right; margin-right:15px; ">
<a class="menu" href="../main/main.php"><b>Home</b></a></li>
</ul>
</div>
<!--<div class="signin1">-->
<form class="signval_main_grid" id="passwordChange" action="passChange.php" method="post">
<div  class="signin_body">
<table cellpadding=10 cellspacing=10>
<tr>
<td class="signin_label">
Please Enter Your Current And New Password.
</td>
</tr>
<tr>
<td class="signin_att"> You are going to change your password to access your Educare Account. We suggest you to choose a strong password with combination of alphabets, numbers, and special keystrokes. 
</td>
</tr>
</table  >
<table cellspacing=10 cellpadding=10>
<tr>
<td class="signin_att">  Current Password: </td>
<td><input type="password" name="currpass"/><br/></td>
</tr>
<tr>
<td class="signin_att"> &nbsp&nbsp&nbsp New Password: </td>
<td><input type="password" name="newpass"/><br/></td>
</tr>
</div>
</table>
<input type="submit" class="button" style="width:120; float:right; margin-right:25px; margin-top:20px;" name="password_change" value="Save Changes">
<br/>
<!--<hr width=135% color=#2f9bd5 height=10%> -->
</form>
</body>
<html>
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
else
{

}
?>