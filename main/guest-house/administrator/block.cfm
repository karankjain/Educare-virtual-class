<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>


  <title>Block Room</title>
  <link rel="shortcut icon" href="images/title.jpg" />
  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />
 
</head>

<body>

<img src="images/bg/blue.jpg" height="190" width="1155"/>

  <div id="mainMenu">
    <ul class="nav">
	
			<li><a href="admin-ind.cfm">Home</a></li>
			<li><a class="here">Room</a>
			<ul>
				<li><a href="bookadm.cfm">Book</a></li>
				<li><a href="canceladm.cfm">Cancel</a></li>
				<li><a href="shift.cfm">Shift</a></li>
				<li><a href="block.cfm" >Block</a></li>
			</ul></li>
			<li><a>Check in/out</a>
			<ul>
				<li><a href="checkin.cfm" >Check in</a></li>
				<li><a href="checkout.cfm" >Check out</a></li>
			</ul></li>
			<li><a>Pantry</a>
			<ul>
				<li><a href="pantry.cfm">Add</a></li>
				<li><a href="mpantry.cfm">Modify</a></li>
			</ul>
			</li>
			<li><a>Report</a>
			<ul>
				<li><a href="" >Check Avail</a></li>
				<li><a href="" >Pending</a></li>
			</ul>
			</li>
			
			<li><a href="" >Settings</a>
			<ul>
				<li><a href="modifyroom.cfm" >Modify Room</a></li>
				<li><a href="modifypantry.cfm">Modify pantry</a></li>
			</ul>
			</li>
			<li><a href="login.cfm">Logout</a></li>
    </ul>
  </div>
  
  <br /><br /><br />
  <b><center>
  <h2>BLOCK</h2></center>
  <form name="f1">
  <table width="75%" border="1" bordercolor="#000000#" align="center">
  	<tr>
		<th align="center">Select all<input type="checkbox" name="c1" /></th>
		<th>Room no</th>
		<th>Room status</th>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="button" name="block" value="BLOCK" id="can" />
	</tr>
	</table>
	</form>
  </div>

</center>
</b>

</div>

</body>
</html>