<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Profile</title>
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
?>

<form  id="profile" action="profile.php" method="post">
<div class="profile_grid">
<table class="profile_body" cellpadding=10 cellspacing=10>
<tr>
<td class="signin_label">
Profile
</td>
</tr>
<tr>
<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Country: </td>
<td><select style="width:200px;" name="country"> 
<OPTION SELECTED VALUE=""><?php echo $country  ?>
      <OPTION VALUE="United Kingdom"> United Kingdom
	  </select></td>
</tr>
<tr>

<!--<td><table cellpadding=10 cellspacing=2><tr>-->
<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp City:</td>
<td><select style="width:200px;" name="city">
<option selected value=""><?php echo $city  ?>
<Option Value="Mumbai">Mumbai
<Option Value="London">London
</select>
</tr>
<tr>
<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp School: </td>
<td><input style="width:200px;" type="text" name="school" value=<?php echo $school  ?>><br/></td>
</tr>
<tr>
<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp College: </td>
<td><input style="width:200px;" type="text" name="college"value=<?php echo $college  ?>><br/></td>
</tr>

<tr><td> Qualification: </td>
<td><select style="width:200px;" name="Qualification"> 
<OPTION SELECTED VALUE=""><?php echo $qualification  ?>
      <OPTION VALUE="BSC">BSC
	  </select></td>
</tr>

<tr><td> &nbsp&nbsp Occupation: </td>
<td><select style="width:200px;" name=""> <?php echo $occupation  ?>
<OPTION SELECTED VALUE="student">Student
      <OPTION VALUE="teacher"> Teacher
	  </select></td>
</tr>
<tr>
<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Interest: </td>
<td><input style="width:200px;" type="text" name=" " value=<?php echo $interest  ?>><br/></td>
</tr>
<tr>
<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Idol: </td>
<td><input style="width:200px;" type="text" name="Idol" value=<?php echo $idol  ?>><br/></td>
</tr>
</table>
<input  type="submit" class="button" style="width:120; float:right; margin-right:52px; margin-top:7px;" name="Save" value="Save Changes">
</div>
<!--<hr width=135% color=#2f9bd5 height=10%> -->
</form>
</html>