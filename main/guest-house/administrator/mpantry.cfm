<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>


  <title> Edit Pantry</title>
  <link rel="shortcut icon" href="images/title.jpg" />

  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />  
  
  <script type="text/javascript">
		function mdf()
		{	
				document.f1.s.style.visibility = 'visible';
				document.f1.m.style.visibility = 'hidden';
		
				document.f1.dat.disabled=false
				document.f1.it.disabled=false
				document.f1.qt.disabled=false
				
		}
</script>
</head>

<body>

<img src="images/bg/blue.jpg" height="190" width="1155"/>

  <div id="mainMenu">
     <ul class="nav">
	
			<li><a href="admin-ind.cfm">Home</a></li>
			<li><a>Room</a>
			<ul>
				<li><a href="bookadm.cfm" class="here">Book</a></li>
				<li><a href="canceladm.cfm" >Cancel</a></li>
				<li><a href="shift.cfm">Shift</a></li>
				<li><a href="block.cfm" >Block</a></li>
			</ul></li>
			<li><a>Check in/out</a>
			<ul>
				<li><a href="checkin.cfm" >Check in</a></li>
				<li><a href="checkout.cfm" >Check out</a></li>
			</ul></li>
			<li><a class="here">Pantry</a>
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
  <center> <br /><br /><br />
  <h2 align="center"> EDIT PANTRY</h2></b>
  <form name="f1" action="" method="post" ><b>
   <table bordercolor="#000000#" border="1" width="50%" align="center">
		<tr>
			<td>Name of customer </td>	
			<td><select>
			
			</select> </td>
			<td>Room no </td>
			<td><select>

			</select></td>	
		</tr>
	</table>
	<br /><br />
	<table  bordercolor="#000000#" border="1" width="50%" align="center">
		
		<tr>
			<th>Date </th>
			<th>Item</th>
			<th>Quantity</th>
		</tr>
		<tr align="center">
			<td><input type="text" name="dat" disabled="disabled" />
			<td><select  name="it" disabled="disabled"></select></td>
			<td><input type="text" name="qt" disabled="disabled"/>
		<tr>
		<td colspan="3" align="center"><input type="button"  id="m" value="MODIFY" onclick="mdf()" />
		<input type="submit"  id="s" value="SAVE" style="visibility:hidden"/></td>
  		</tr>
	</table></b>
  </form>
  </center>
</div>

</body>
</html>