<?php
// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['email_id'])) {
header('Location: ../main/main.php');
}
?>
<html>
<head>
<title>
Educare|Verify Password
</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body class="signup_main_body">
<!--<div class="signin1">-->
<form class="signval_main_grid" id="signin" action="signin.php" method="post">
<div  class="signin_body">
<table cellpadding=10 cellspacing=10>
<tr>
<td class="signin_label">
Please Enter Valid Email-id And Password
</td>
</tr>
<tr>
<td class="signin_att"> You have entered a wrong Email_id or Password. Try to login again. If you have not signed up yet, then you need to signup first to get the access of Educare. 
</td>
</tr>
</table  >
<table cellspacing=10 cellpadding=10>
<tr>
<td class="signin_att"> &nbsp Email id </td>
<td><input type="text" name="email"/><br/></td>
</tr>
<tr>
<td class="signin_att">Password </td>
<td><input type="password" name="password"/><br/></td>
</tr>
</div>
</table>
<input type="submit" class="button" style="width:120; float:right; margin-right:25px; margin-top:20px;" name="Sign_in" value="Sign In">
<br/>
<!--<hr width=135% color=#2f9bd5 height=10%> -->
</form>

>
</body>
<html>