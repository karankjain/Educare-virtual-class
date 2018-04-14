<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Create Group</title>
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
<form class="deactivate_main_grid" id="creategroup" action="creategroup.php" method="post">
<div  class="signin_body">
<table cellpadding=10 cellspacing=10>
<tr>
<td class="signin_label">
Please Enter The Group Name
</td>
</tr>
<tr>
<td class="signin_att"> You are going to create a Group using which you can chat with people in chat room within a group created by you.
</td>
</tr>
</table  >
<table cellspacing=10 cellpadding=10>
<tr>
<td class="signin_att">  Group Name: </td>
<td><input type="text" name="group_name"/><br/></td>
</tr>
</div>
</table>
<input type="submit" class="button" style="width:120; float:right; margin-right:25px; margin-top:20px;" name="Save" value="Save Group">
<br/>
<!--<hr width=135% color=#2f9bd5 height=10%> -->
</form>
</body>
<html>