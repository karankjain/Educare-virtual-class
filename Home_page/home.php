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
Educare
</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body class="body">
<!--<div class="signin1">-->

<form class="signin_grid" id="signin" action="signin.php" method="post">
<div  class="signin_body">
<table cellpadding=10>
<tr>
<td class="signin_label">
Sign In
</td>
</tr>
<tr>
<td class="signin_att"> &nbsp Email id </td>
<td><input type="text" name="email"/><br/></td>
</tr>
<tr>
<td class="signin_att">Password </td>
<td><input type="password" name="password"/><br/></td>
</tr>
<tr>
<td><input type="submit" class="button" style="width:80;" name="Sign_in" value="Sign In">
</td>
</tr>
</div>
</table>
<br/>
<!--<hr width=135% color=#2f9bd5 height=10%> -->
</form>

<div id="signup_grid">
<div class="signup_body">
<table class="signin_label" cellpadding=10 > <tr><td>Join To Get Free Education</td></tr>
<tr><td><input type="button" class="button" style="width:80;" value="Sign Up" onClick="window.location='../signup/signuphtml.php' ">
</td></tr>
</table>
</div>
</div>
</body>
<html>