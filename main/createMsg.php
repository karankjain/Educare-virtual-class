<?php
// Inialize session
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Create</title>
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
<form class="upload" action="create_msg.php" method="POST">
<div>
<table class="profile_body" cellspacing=10 cellpadding=10>
<tr><td><b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp To: </b></td>
<td><input type ="textbox" style="width:322px;" name="to" value=""/></td></tr>
<tr><td><b>&nbsp&nbsp Message: </b></td>
<td><textarea style="font-family:arial; font-size:12px;" type="text" name="msg" value="" cols="50" rows="10"></textarea></td></tr>
</table>
<input class="button" style="float:right; margin-right:30px; margin-top:20px; width:80px" type="submit" 
value="Send " />
</form>
</body>
</html>