<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>

  <title>SHIFT</title>
  <link rel="shortcut icon" href="images/title.jpg" />
  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />
  
</head>

<body>

<img src="images/bg/blue.jpg" height="190" width="1155"/>

  <div id="mainMenu">
    <ul class="nav">
	
			<li><a href="admin-ind.cfm" >Home</a></li>
			<li><a class="here">Room</a>
			<ul>
				<li><a href="bookadm.cfm" >Book</a></li>
				<li><a href="canceladm.cfm" >Cancel</a></li>
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
	
	<b><br /><br /><br />
  	<h2 align="center">SHIFT</h2>
  	<form name="f1" method="post" >
		<table border="1" cellpadding="2" hspace="7" vspace="7"  align="center"  width="40%" bordercolor="#000000#">
			<tr>
				<td>Name of customer</td>
				<td><select></select></td>
			</tr>
			<tr>
				<td>Room no </td>
				<td><input type="text" disabled="disabled" name="rn"/></td>
			</tr>
			<tr>  
				<td>Shift to room no</td>
				<td><select></select></td>
			</tr>
			<tr>
			<td colspan="2" align="center"><input type="submit" value="SHIFT" /></td>
			</tr>
		</table>
	</form>
	</b>

</div>

</body>
</html>