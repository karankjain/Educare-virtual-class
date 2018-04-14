<html>
<head>
<title>
Educare|Sign Up
</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#month').change(function(){
                    console.log($(this));
                    $.get( "Dates.php" , { option : $(this).val() } , function ( data ) {
                        $ ( '#date' ) . html ( data ) ;
                    } ) ;
                });
            });
        </script>
    </head>
</head>
<body class="signup_main_body">
<!--<div class="signin1">-->
<form class="signup_main_grid" id="signup" action="signup.php" method="post">
<div  class="signin_body">
<table cellpadding=10 cellspacing=2>
<tr>
<td class="signin_label">
Sign Up
</td>
</tr>
<tr>
<td class="signin_att"> First Name: </td>
<td><input type="text" name="Fname"/><br/></td>
</tr>
<tr>
<td class="signin_att"> Last Name: </td>
<td><input type="text" name="Lname"/><br/></td>
</tr>
<tr>
<td class="signin_att"> &nbsp &nbsp Email id: </td>
<td><input type="text" name="email"/><br/></td>
</tr>
<tr>
<td class="signin_att">&nbsp Password: </td>
<td><input type="password" name="password"/><br/></td>
</tr>
<tr>
<td class="signin_att"> &nbsp &nbsp &nbsp Gender: </td>
<td><select name="gender" style="width: 90px"> 
<OPTION SELECTED VALUE="male">Male
      <OPTION VALUE="female"> Female
	  </select></td>
</tr>
<tr>

<!--<td><table cellpadding=10 cellspacing=2><tr>-->
<td class="signin_att"> &nbsp Birth Date:</td>
<td>
<select name="month" id="month" style="width: 90px">
<option selected value="months">Month:</option>
<?php
$monthNames = Array("January", "February", "March", "April", "May", "June", "July", 
"August", "September", "October", "November", "December");
foreach ($monthNames as $value)
  {
  //echo "<Option>".$value."</option><br />";
   printf ( '<option value="%s">%s</option>' , $value , $value ) ;
  }
?>
</select>
<select name="date" id="date" style="width: 90px">
<option selected value="dates">Date:</option>
<?php
?>
</select>

<select name="year" style="width: 90px">
<option selected value="years">Year:</option>
<?php
for ($year=1940; $year<=2012; $year++)
  {
   printf ( '<option value="%s">%s</option>' , $year , $year ) ;
  }
?>
</select>

</tr>
<!--<tr><td class="signin_att"> Occupan: </td>
<td><select name="occupation"> 
<OPTION SELECTED VALUE="student">Student
      <OPTION VALUE="teacher"> Teacher
	  </select></td>
</tr>-->
</table>
<table cellpadding=10 cellspacing=2><tr><td><?php
          require_once('recaptchalib.php');
          $publickey = "6LekscwSAAAAAAOVEjRsl5KaFBc8ikloymtCgv49"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?></td></tr></table>
		<input type="submit" class="button" style="width:80; float:right; margin-right:20px; margin-top:20px;" name="Sign_up" value="Sign Up">
		<!--<table cellpadding=10 cellspacing=2>
<tr>
<td><input type="submit" class="button" style="width:60;" name="Sign_up" value="Sign Up"></td>
</tr>
</table>-->
</div>
<!--<hr width=135% color=#2f9bd5 height=10%> -->
</form>
</html>