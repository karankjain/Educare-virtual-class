<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>

  <title>MODFIY PANTRY</title>
  <link rel="shortcut icon" href="images/title.jpg" />
  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />
  <script type="text/javascript">
  		function mdf()
		{	
				document.f1.rate.disabled=false
				document.f1.s.disabled=false
				
				document.f1.m.disabled=true
				document.f1.a.disabled=true
				document.f1.d.disabled=true
				
				document.f1.m.style.visibility = 'hidden';
				document.f1.itn.disabled=true
				
		}
		
		function ad()
		{	
				document.f1.rate.disabled=false
				document.f1.s.disabled=false
				
				document.f1.m.disabled=true
				document.f1.a.disabled=true
				document.f1.d.disabled=true
				
				document.f1.a.style.visibility = 'hidden';
				document.f1.itn.disabled=true
				
		}
		
		function de()
		{	
			
				alert('ARE YOU SURE YOU WANT TO DELETE')
						
				document.f1.m.disabled=true
				document.f1.a.disabled=true
				document.f1.d.disabled=true
				
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
			<li><a href="" class="here" >Settings</a>
			<ul>
				<li><a href="modifyroom.cfm" >Modify Room</a></li>
				<li><a href="modifypantry.cfm">Modify pantry</a></li>
			</ul>
			</li>
			<li><a href="login.cfm">Logout</a></li>
    
	</ul>
  </div>
  	<br /><br /><b>
	<h2 align="center">MODIFY PANTRY</h2>
	<form name="f1" action="##">
		<table border="1" bordercolor="#000000#" align="center" width="50%">
			<tr>
				<td>Item name</td>
				<td colspan="2"><select name="itn"></select></td>
			</tr>
			<tr>
				<td>Rate</td>
				<td colspan="2"><input type="text" disabled="disabled" name="rate"/></td>
			</tr>
		
			<tr align="center">
				<td><input type="button" name="modify" value="MODIFY" id="m" onclick="mdf()"/></td>
				<td><input type="button" name="add" value="ADD" id="a" onclick="ad()"/></td>
				<td><input type="button" name="del" value="DELETE" id="d" onclick="dl()"/></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="save" id="s" value="SAVE" disabled="disabled"/></td>
			</tr>
		</table>
	</form>
	</b>
</div>

</body>
</html>