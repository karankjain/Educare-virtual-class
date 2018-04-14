<?php
// Inialize session
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Upload</title>
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
<form class="upload" enctype="multipart/form-data" action="uploader.php" method="POST">
<div>
<table class="profile_body" cellspacing=10 cellpadding=10>
<tr><td><input type="hidden" name="MAX_FILE_SIZE" value="1000000000" /></td></tr>
<tr><td><b>Choose a file to upload: </b></td>
<td><input name="uploadedfile" type="file" /></td></tr>
<tr><td><b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Name Of the file: </b></td>
<td><input type ="textbox" style="width:322px;" name="filename" value=""/></td></tr>
<tr><td><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Description: </b></td>
<td><textarea style="font-family:arial;" type="text" name="descript" value="" cols="50" rows="4"></textarea></td></tr>
</table>
<input class="button" style="float:right; margin-right:30px; margin-top:20px; width:80px" type="submit" value="Upload " />
</form>
</body>
</html>