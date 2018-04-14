<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Inbox</title>
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
<?php
//connection to database
$i=100;
$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
$query1="select sender,msg,time from message where receiver='".$_SESSION['email_id']."'";
$result1 = mysql_query($query1) or die($query1."<br/><br/>".mysql_error());
echo '<div Style="margin-left:170px ; margin-top:20px; font-size: 24px; color:#62AAD3;">Inbox</div></br>';
while($row1 = mysql_fetch_array($result1))
{
$sender = $row1['sender'];
$msg = $row1['msg'];
$time = $row1['time'];
echo '<div style="display:block; background-color:#DEEFF7/*#FFFFFF*/; margin-left:200px; margin-right:200px; -webkit-box-shadow: 0px 5px 10px rgba(0,0,0, 0.2);
-moz-box-shadow: 0px 5px 10px rgba(0,0,0, 0.2);
		box-shadow: 0px 5px 10px rgba(0,0,0, 0.2);
		color:#62AAD3;">';
echo '<span style="font-size:20"; class="sid" >From: </span>'.$sender.'</br>';
echo '<span style="font-size:17;">Message:</span>'.$msg.'</br>';
echo '<span style="font-size:17;">On:</span><span style="font-size:18;">'.$time.'</span></br></br></div>';
}
?>
</body>
</html>