<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>


  <title>Book Room</title>
  <link rel="shortcut icon" href="images/title.jpg" />
  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />
  
  <script type="text/javascript">
 	 function allow()
  	{
		if(document.f1.sro.value=="2")
		{
		
			document.f1.nam.value=""
			document.f1.ph.value=""
			document.f1.em.value=""

			document.f1.nam.disabled=false
			document.f1.phdisabled=false
			document.f1.ph.disabled=false
			document.f1.genm.disabled=false
			document.f1.genf.disabled=false
		}
		else
		{
			document.f1.nam.value=""
			document.f1.ph.value=""
			document.f1.em.value=""
		
			document.f1.nam.disabled=true
			document.f1.em.disabled=true
			document.f1.ph.disabled=true
			document.f1.genm.disabled=true
			document.f1.genf.disabled=true
		}
	
  }
  	
  
  function getValues()
  {
  	if(document.f1.sro.value=="1")
	{
		<!--get values from database-->
	}
	if(document.f1.sro.value=="2")
	{
		<!--clear all the fields-->
	}
  }
  function validate()
  {
  	if(document.f1.sro.value=="2")
  	{
		if(document.f1.ona.value=="")
		{
			alert("Enter name of guest")
			return false;
		}
		else if(document.f1.oph.value=="")
		{
			alert("Enter phone number")
			return false;
		}
		else if(isNaN(document.f1.oph.value)==true)
		{
			alert("Enter correct phone number")
			return false;
		}
		
		
	}
	else if(document.f1.sro.value=="1")
	{
		if(document.se.pov.value=="")
		{
			alert("Enter purpose of visit")
			return false;
		}
		else if(document.se.fd.value=="")
		{
			alert("Enter from date")
			return false;
		}
		else if(document.se.td.value=="")
		{
			alert("Enter to date")
			return false;
		}
		else if(IsDate(document.se.fd.value)==false)	
		{
			alert("Enter proper from date")
			return false;
		}
		else if(IsDate(document.se.td.value)==false)	
		{
			alert("Enter proper to date")
			return false;
		}
  	}
	else 
		return true;
  }
  </script>
</head>

<body>

<img src="images/bg/blue.jpg" height="190" width="1155"/>

  <div id="mainMenu">
    <ul class="nav">
	
			<li><a href="admin-ind.cfm">Home</a></li>
			<li><a class="here">Room</a>
			<ul>
				<li><a href="bookadm.cfm">Book</a></li>
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
  
  <br /><h5>All * fields are mandatory</h5>
  <b>
  <h2 align="center">BOOKING</h2>
  <form name="f1">
  <table width="75%" border="1" align="center" bordercolor="#000000#">
  	<tr>
	<td>Employee Id*</td>
	<td><input type="text" name="eid" /><input type="button" name="get" value="Verify" onclick="getValues()"/></td>
	<td>Booking for*</td>
	<td>
  		<select name="sro" onchange="allow()">
  			<option selected="selected" id="1" value="1">Self</option>
  			<option id="2" value="2">Others</option>
  		</select>
	</td>
	</tr>	 
	<tr>
		<td>Name*</td>
		<td><input type="text" name="nam" disabled="disabled"/></td>
			<td>Gender</td>
			<td>M<input type="radio" name="gen" id="genm" checked="checked" disabled="disabled">
			F<input type="radio" name="gen" id="genf" disabled="disabled"/></td>
	</tr>
	<tr>
		<td>Phone no*</td>
		<td><input type="text" name="ph" disabled="disabled"/></td>
		<td>Email</td>
		<td><input type="text" name="em"  disabled="disabled"/></td>
	</tr>
	<tr>
		<td>Visit type*</td>
		<td><select name="vt">
			<option value="pers">Personal</option>
			<option value="off">Official</option>
			<option value="med">Medical</option>
			</select>
		</td>
		<td>Purpose of visit*</td>
		<td><input type="text" name="pov" /></td>
	</tr>
	<tr>
		<td> From Date*</td>
		<td><input type="text" name="fd"/> <input type="button" value="Calendar" name="fcal" /></td>
		<td> To Date*</td>
		<td><input type="text" name="td"/> <input type="button" value="Calendar" name="tcal" /></td>
	</tr>
	<tr>
			<td> Check in time*</td>
			<td><select name="cit">
				<option value="1">01:00</option>
				<option value="2">02:00</option>
				<option value="3">03:00</option>
				<option value="4">04:00</option>
				<option value="5">05:00</option>
				<option value="6">06:00</option>
				<option value="7">07:00</option>
				<option value="8">08:00</option>
				<option value="9">09:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
				<option value="24">00:00</option>
			</select>
			0-24 hrs
			</td>
			<td> Check out time*</td>
			<td><select name="cot">
				<option value="1">01:00</option>
				<option value="2">02:00</option>
				<option value="3">03:00</option>
				<option value="4">04:00</option>
				<option value="5">05:00</option>
				<option value="6">06:00</option>
				<option value="7">07:00</option>
				<option value="8">08:00</option>
				<option value="9">09:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
				<option value="24">00:00</option>
			</select>
			0-24 hrs
			</td>
		</tr>
		<tr>
			<th colspan="4" align="center"> Details of accompanying guest if any
			</th>
		</tr>
	</table>
	<table border="1" width="75%" align="center" bordercolor="#000000#">
		<tr align="center">
			<th>Name</th>
			<th>Relation</th>
			<th>Age</th>
		</tr>
		<tr align="center">
			<td><input type="text" name="gn" /></td>
			<td><input type="text" name="grel" /></td>
			<td><input type="text" name="ga" /></td>
		</tr>
		<tr>
			<td colspan="3">Small kids if any</td>
		</tr>
		<tr align="center">
			<td><input type="text" name="kn1" /></td>
			<td><input type="text" name="krel1" /></td>
			<td><select>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
			</select>
			</td>
		</tr>
		<tr align="center">
			<td><input type="text" name="kn2" /></td>
			<td><input type="text" name="krel2" /></td>
			<td><select>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
			</select>
			</td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" value="Book Room" name="br"  onclick="return validate()"/></td>		
		
		</tr>
	</table><br />

	
	</form>
  </div>

</b>

</div>

</body>
</html>