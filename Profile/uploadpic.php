<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 <title>
Educare|Upload Profile Picture
</title>
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
<form class="update_profile_pic" enctype="multipart/form-data" action="uploade.php" method="POST">
<div class="signin_att">
<input type="hidden"  name="MAX_FILE_SIZE" value="100000000" /><p style="margin-left:20px;"> Choose a image file from your computer to upload it as a profile picture at Educare.</p></br>
<input style="margin-left:20px;" name="uploadedfile" type="file" /><br />
<input type="submit" class="button" style="width:80; float:right; margin-right:20px; margin-top:20px;" value="Upload" /></div>
</form>
</body>
</html>