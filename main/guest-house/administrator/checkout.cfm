<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>


  <title>Checkout</title>
  <link rel="shortcut icon" href="images/title.jpg" />

  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />
 
	<script type="text/javascript">
		function addx()
		{	
			if(document.f1.it.value=="extra")
			{	
				document.f1.xt.style.visibility = 'visible';
			}		
			else
			{
				document.f1.xt.style.visibility = 'hidden';
			}	
		}
		var d=new Date();
		function defau()
		{	
			document.f1.dt.value=d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear();
		}
	</script>
  
  
</head>

<body onload="defau()">

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
			<li><a class="here">Check in/out</a>
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
  <b> <br /><br /><br />
  <h2 align="center">CHECK-OUT</h2>
  <form name="f1" action="#" method="post" >
  	<table cellpadding="3" align="center" border="1" bordercolor="#000000#" width="40%">
		<tr>
		<td>Date </td>
		<td><input type="text" name="dt"/></td>
		</tr>

		<tr>
			<td>Name of customer</td>	
			<td><select></select> </td>
		</tr>
		
		<tr>
  			<td>Room no:</td>
			<td><input type="text" name="rn" disabled="disabled"/></td>
		</tr>
		
		<tr>
			<td>Bed no:</td>
			<td><input type="text" name="bn" disabled="disabled"/></td>	
		</tr>
		
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Check-out" /></td>
  		</tr>
		</table></b>
  </form>
  
</div>

</body>
</html>