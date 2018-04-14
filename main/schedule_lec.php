<?php
// Inialize session
session_start();
?>
<html>
<head>
  <title>Educare|Schedule a Lecture</title>
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <link rel="stylesheet" type="text/css" href="../menubar.css" />
  <link rel="stylesheet" type="text/css" href="../main/style.css" />
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  
		 <script type="text/javascript">
            $(function(){
                $('#month').change(function(){
                    console.log($(this));
                    $.get( "dates.php" , { option : $(this).val() } , function ( data ) {
                        $ ( '#date' ) . html ( data ) ;
                    } ) ;
                });
            });
        </script>
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
<form class="upload" action="ScheduleLec.php" method="POST">
<div>
<table class="profile_body" cellspacing=10 cellpadding=10>
<tr><td><b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Topic: </b></td>
<td><input type ="textbox" style="width:365px;" name="topic" value=""/></td></tr>
<tr><td><b>&nbsp&nbsp Description: </b></td>
<td><textarea style="font-family:arial; font-size:12px;" type="text" name="description" value="" cols="63" rows="3"></textarea></td></tr>
<tr>

<!--<td><table cellpadding=10 cellspacing=2><tr>-->
<td><b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Timing:</b></td>
<td>
<select name="month" id="month" style="width: 70px">
<option selected value="month">Month:</option>
<?php
$monthNames = Array(1,2,3,4,5,6,7,8,9,10,11,12);
foreach ($monthNames as $value)
  {
  //echo "<Option>".$value."</option><br />";
   printf ( '<option value="%s">%s</option>' , $value , $value ) ;
  }
?>
</select>
<select name="date" id="date" style="width: 70px">
<option selected value="date">Date:</option>
<?php
?>
</select>

<select name="year" style="width: 70px">
<option selected value="years">Year:</option>
<?php
for ($year=1940; $year<=2012; $year++)
  {
   printf ( '<option value="%s">%s</option>' , $year , $year ) ;
  }
?>
</select>
<select name="hour" style="width: 70px">
<option selected value="hour">Hour:</option>
<?php
for ($hour=0; $hour<=23; $hour++)
  {
   printf ( '<option value="%s">%s</option>' , $hour , $hour ) ;
  }
?>
</select>
<select name="min" style="width: 70px">
<option selected value="min">Minutes:</option>
<?php
for ($min=0; $min<=9; $min++)
  {
   printf ( '<option value="%s">%s</option>' , "0".$min , "0".$min ) ;
  }
  for ($min=10; $min<=59; $min++)
  {
   printf ( '<option value="%s">%s</option>' , $min , $min ) ;
  }

?>
</select>
</tr>
<tr><td ><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Duration:</b></td><td><input style="width: 70px" type="text" name="duration" />Min</td>
</tr>

</table>
<input class="button" style="float:right; margin-right:30px; margin-top:20px; width:80px" type="submit" 
value="Save " />
</form>
</body>
</html>