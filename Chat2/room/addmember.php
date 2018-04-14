<?php
// Inialize session
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>Educare|Add Member</title>
  <link rel="stylesheet" type="text/css" href="../../style.css" />
  <link rel="stylesheet" type="text/css" href="../../menubar.css" />
  <link rel="stylesheet" type="text/css" href="../../main/style.css" />
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
<form class="signval_main_grid" id="passwordChange" action="add_member.php" method="post">
<div  class="signin_body">
<table cellpadding=10 cellspacing=10>
<tr>
<td class="signin_label">
Please Enter Your Chat Room And New Member.
</td>
</tr>
<tr>
<td class="signin_att"> You are going to add new member to your group. Hope you know this new user. Once added, You want be able to remove that person from your chat remove.
</td>
</tr>
</table  >
<table cellspacing=10 cellpadding=10>
<tr>
<td class="signin_att">  Group Name: </td>
<td><input type="text" name="groupname"/><br/></td>
</tr>
<tr>
<td class="signin_att"> &nbsp&nbsp&nbsp New Member: </td>
<td><input type="text" name="member"/><br/></td>
</tr>
</div>
</table>
<input type="submit" class="button" style="width:120; float:right; margin-right:25px; margin-top:20px;" name="add_member" value="Add Member">
<br/>
<!--<hr width=135% color=#2f9bd5 height=10%> -->
</form>
</body>
<html>
