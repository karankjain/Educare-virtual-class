<?php
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['email_id'])) {
        header('Location: ../home_page/home.php');
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Home</title>
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <link rel="stylesheet" type="text/css" href="../menubar.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<!--<script type="text/javascript" src="script1.js"></script>-->
		<script type="text/javascript"> 
function make_blank()
{
document.searchform.type.value ="";
}
/*
* Author:      Marco Kuiper (http://www.marcofolio.net/)
*/
google.load("jquery", "1.3.1");
google.setOnLoadCallback(function()
{
	// Safely inject CSS3 and give the search results a shadow
	var cssObj = { 'box-shadow' : '#888 5px 10px 10px', // Added when CSS3 is standard
		'-webkit-box-shadow' : '#888 5px 10px 10px', // Safari
		'-moz-box-shadow' : '#888 5px 10px 10px'}; // Firefox 3.5+
	$("#suggestions").css(cssObj);
	
	// Fade out the suggestions box when not active
	 $("input").blur(function(){
	 	$('#suggestions').fadeOut();
	 });
});

function lookup(inputString) {
	if(inputString.length == 0) {
		$('#suggestions').fadeOut(); // Hide the suggestions box
	} else {
		$.post("rpc1.php", {queryString: ""+inputString+""}, function(data) { // Do an AJAX call
			$('#suggestions').fadeIn(); // Show the suggestions box
			$('#suggestions').html(data); // Fill the suggestions box
		});
	}
}
</script>
</head>
<body class="signup_main_body">
<div class="drop_panel">
<ul style="position:relative; top:6pt; left:-20pt;">
<li style="display:inline;">Logged in as <b><?php echo $_SESSION['email_id']; ?></b></li>
<li style="display:inline;float:right; margin-right:15px; ">
<div class="drop-panel">
		<span class="plus">+</span>
		<ul class="sub-menu">
		<li><b><a class="menu" href="../profile/profile_own.php">Profile</a></b></li>
			<li><a class="menu" href="passChange.php">Change Password</a></li>
			<li><a class="menu" href="deactivate.php">Deactivate Account</a></li>
			<li><a class="menu" href="logout.php">Logout</a></li>
		</ul>
	</div>
</li>
</ul>
</div>
<div class="body_side_bar">
<div class="body_side_bar_data">
<table cellpadding=10 cellspacing=10 
style="font-size:18px; color:#62AAD3; text-shadow:1px 1px 1px #dddddd; ">
<tr><td><a class="side" href="createMsg.php">Create Message</a></td></tr>
<tr><td><a class="side" href="inbox.php">Inbox</a></td></tr>
<tr><td><a class="side" href="../upload/downloads.php">Downloads</a></td></tr>
<tr><td><a class="side" href="../upload/upload.php">Uploads</a></td></tr>
<tr><td><a class="side" href="schedule_lec.php">Schedule Lecture</a></td></tr>
<tr><td><a class="side" href="Create_group.php">Create Group</a></td></tr>
<tr><td><a class="side" href="../chat2/jumpin.php">Chat Rooms</a></td></tr>
</table>
</div>
</div>
<div>
	<form id="searchform" name="searchform">
		<div  class="search_grid">
	    <input style="color:#62AAD3 ;" type="text" size="30" value="Search" name="type" id="inputString" onkeyup="lookup(this.value);" onClick="make_blank();" />
		</div>
		<div id="suggestions"><?php
		?>
		</div>
	</form>
</div>
<?php
//connection to database
$i=100;
$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
$query1="select sch_id,lecturer,topic,description,timing,duration,display_time from scheduled_lecture order by timing DESC";
$result1 = mysql_query($query1) or die($query1."<br/><br/>".mysql_error());
echo '<div Style="margin-left:250px ; margin-top:-440px; font-size: 24px; color:#62AAD3;">Scheduled Lecture</div></br>';
$i = 1;
while($row1 = mysql_fetch_array($result1))
{
$sch_id = $row1['sch_id'];
$lecturer = $row1['lecturer'];
$topic = $row1['topic'];
$description = $row1['description'];
$timing = $row1['timing'];
$duration = $row1['duration'];
$display_time = $row1['display_time'];
echo '<div style="display:block; background-color:#DEEFF7; margin-left:250px; margin-right:300px; margin-top:10px; -webkit-box-shadow: 0px 5px 15px rgba(0,0,0, 0.2);
-moz-box-shadow: 0px 5px 15px rgba(0,0,0, 0.2);
		box-shadow: 0px 5px 15px rgba(0,0,0, 0.2);
		color:#62AAD3;"><span style="font-size:18";>'.$i.'.&nbsp</span>';
echo '<span style="font-size:20;"> Topic:</span><span style="font-size:18;">'.$topic.'</span></br>';
echo '<span style="font-size:17;">Description:</span>'.$description.'</br>';
echo '<span style="font-size:17;"> Conducted By:</span><span style="font-size:18;">'.$lecturer.'</span></br>';
echo '<span style="font-size:17;">On:</span><span style="font-size:18;">'.$timing.'</span></br>';
echo '<span style="font-size:17;">Duration:</span><span style="font-size:18;">'.$duration.'min</span></br>';
echo '<a style="font-size:17"; class="sid" href="attend.php?attendance='.$sch_id.'">Register</a></br></br></div>';
$i = $i+1;
}
?>
</body>
</html>
