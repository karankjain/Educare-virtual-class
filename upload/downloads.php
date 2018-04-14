<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Download</title>
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
$query1="select up_id,name,extension,description,uploaded_by,f_name,l_name,time from upload order by up_id DESC";
$result1 = mysql_query($query1) or die($query1."<br/><br/>".mysql_error());
echo '<div Style="margin-left:170px ; margin-top:20px; font-size: 24px; color:#62AAD3;">Download</div></br>';
$i = 1;
while($row1 = mysql_fetch_array($result1))
{
$up_id = $row1['up_id'];
$name = $row1['name'];
$extension = $row1['extension'];
$description = $row1['description'];
$uploaded_by = $row1['uploaded_by'];
$fname = $row1['f_name'];
$lname = $row1['l_name'];
$time = $row1['time'];
echo '<div style="display:block; background-color:#DEEFF7; margin-left:200px; margin-right:200px; -webkit-box-shadow: 0px 5px 15px rgba(0,0,0, 0.2);
-moz-box-shadow: 0px 5px 15px rgba(0,0,0, 0.2);
		box-shadow: 0px 5px 15px rgba(0,0,0, 0.2);
		color:#62AAD3;"><span style="font-size:18";>'.$i.'.&nbsp</span>';
echo '<a style="font-size:20"; class="sid" href="download.php?download_file='.$up_id.$extension.'">'.$name.'</a></br>';
echo '<span style="font-size:17;">Description:</span>'.$description.'</br>';
echo '<span style="font-size:17;"> Uploaded by:</span><span style="font-size:18;">'.$fname.'&nbsp'.$lname.'</span></br>';
echo '<span style="font-size:17;">On:</span><span style="font-size:18;">'.$time.'</span></br></br></div>';
$i = $i+1;
}
?>
</body>
</html>