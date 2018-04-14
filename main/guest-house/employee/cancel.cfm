<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>


  <title>Cancel Room</title>
  <link rel="shortcut icon" href="images/title.jpg" />
  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />
  
</head>

<body>

<img src="images/bg/blue.jpg" height="190" width="1155"/>

  <div id="mainMenu">
     <ul class="nav">
      <li><a href="emp-ind.cfm" title="Go to home page">Home</a></li>
      <li><a href="book.cfm" title="Book room">Book</a></li>
	  <li><a href="status.cfm" title="Status of the room booked" >Status</a></li>
      <li><a href="cancel.cfm" title="Cancel resrvation" class="here">Cancel</a></li>
      <li><a href="contact.cfm" title="Contact us">Contact us</a></li>
	  <li><a href="login.cfm" class="last" title="Sign out">Sign out</a></li>
    </ul>
  </div>
  
  <br /><br /><br />
  <b>
  <h2 align="center">CANCEL</h2>
  <form name="f1">
  <table width="75%" border="1" bordercolor="#000000#" align="center">
  	<tr align="center">
		<th>Select all<input type="checkbox" name="c1" /></th>
		<th>Book ID</th>
		<th>Name</th>
		<th>From Date</th>
		<th>To Date</th>
	</tr>
	
	<tr>
		<td colspan="5" align="center"><input type="button" name="cancel" value="cancel" onclick="cancel()"/></td>
	</tr>
	</table>
	</form>
  </div>

</center>
</b>
</div>

</body>
</html>