<?php
// Inialize session
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Home</title>
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <link rel="stylesheet" type="text/css" href="../menubar.css" />
  <link rel="stylesheet" type="text/css" href="../main/style.css" />
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
<div style="position:relative; top:200; left:15;"><a class="side" href="uploadpic.php">Edit Photo </a></div>
<?php
$extension = '.jpg';
$filename = $_SESSION['email_id'].$extension;
//$email_id = $_GET['profile_id'];
//echo $filename;
if (file_exists("uploads/" . $filename)) {
//echo '<a href="uploadpic.php" >';
echo '<div class="image"> ';
echo '<img src="uploads/'.$_SESSION['email_id'].'.jpg" alt="face" height= " 142 " width= " 142 " />';
echo '</a></div>'; }
else
{
//echo '<a href="uploadpic.php" >';
echo '<div class="image"> ';
echo '<img src="uploads/default.jpg" alt="face" height= " 142 " width= " 142 " />';
echo '</a></div>';

}
?>
<?php
$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
$query="select * from profile where email_id='".$_SESSION['email_id']."'";
$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
while($row = mysql_fetch_array($result))
{
$country = $row['country'];
$city = $row['city'];
$school = $row['school'];
$college = $row['College'];
$qualification = $row['Qualification'];
$occupation =$row['Occupation'];
$interest = $row['Interest'];
$idol = $row['idol'];
}
$query2="select * from signup where email_id='".$_SESSION['email_id']."'";
$result2 = mysql_query($query2) or die($query2."<br/><br/>".mysql_error());
while($row2 = mysql_fetch_array($result2))
{
$fname = $row2['first_name'];
$lname = $row2['last_name'];
$email_id = $row2['email_id'];
$sex = $row2['gender'];
$date = $row2['date'];
$month =$row2['month'];
$year = $row2['year'];
$activate = $row2['dateActivate'];
}
?>
<div class="profile_grid">
<table class="profile_body" cellspacing=10 cellpadding=5>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Name:</td><td><b><?php echo $fname." ".$lname; ?></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Country:</td><td><b><?php echo $country; ?></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 City:</td><td><b><?php echo $city; ?></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 Sex:</td><td><b><?php echo $sex; ?></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Born On:</td><td><b><?php echo $date." ".$month." ".$year; ?></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp School:</td><td><b><?php echo $school; ?></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp College:</td><td><b><?php echo $college; ?></b></td></tr>
<tr><td>Qualification:</td><td><b><?php echo $qualification;?></b></td></tr>
<tr><td>&nbsp&nbsp Occupation:</td><td><b><?php echo $occupation; ?></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Interest:</td><td><b><?php echo $interest; ?></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Idol:</td><td><b><?php echo $idol; ?></b></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Email_id:</td><td><b><?php echo $email_id; ?></b></td></tr>
<tr><td>&nbsp Active Since:</td><td><b><?php echo $activate; ?></b></td></tr>
</table>
</div>
<div style="position:relative; top:-110; left:555;"><a class="side" href="profileform.php">Edit Profile</a></div> 
</body>
</html>