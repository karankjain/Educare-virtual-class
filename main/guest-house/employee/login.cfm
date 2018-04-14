<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>

	
  <title>NPCIL GUESTHOUSE</title>
  <link rel="shortcut icon" href="images/title.jpg" />
  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />
  
	<script language="javascript" type="text/javascript">
	var newwindow;
	function poptastic(url)
	{
		newwindow=window.open(url,'name','height=480,width=480');
		if (window.focus) 
		{
		window.losefocus
		top.newwindow.focus()
		}
		else
		{newwindow.focus()}
		
	}
		function validate()
		{
			if(document.log.un.value=="")
			{	
				alert("Enter username")
				return false
			}
			else if(document.log.pass.value=="")
			{
				alert("Enter password")
				return false
			}
			else
				return true
		}
	</script>
  
  
</head>


<body>
<img src="images/bg/blue.jpg" height="190" width="1155"/>
<marquee direction="left" bgcolor="#000066">WELCOME TO NPCIL</marquee>	
  
  <br /><br /><br /><br /><br /><b>
  <h2 align="center">LOGIN</h2></b>
  <form name="log" method="post" action="employee/emp-ind.cfm">
	<table align="center">
		<tr>
			<td><b>Username:</b></td> 
			<td><input type="text" name="un" /></td>
		</tr>
		<tr>
			<td><b>Password: </b></td>
			<td><input type="password" name="pass"/></td>
		</tr>
	</table>
	<center><a href="emp-ind.cfm"><input type="submit" name=" submit" value="SUBMIT"/></a>
	</center>
  </form>
  <br /><br /><br /><br />
<marquee  direction="left" loop="-1" behavior="alternate">
			<a href="javascript:poptastic('images/gh/1.jpg');">
			<img src="images/gh/1.jpg" width="175" height="175" hspace="10" /></a>
			<a href="javascript:poptastic('images/gh/2.jpg');">
			<img src="images/gh/2.jpg" width="175" height="175" hspace="10" /></a>
			<a href="javascript:poptastic('images/gh/3.jpg');">
			<img src="images/gh/3.jpg" width="175" height="175" hspace="10" /></a>
			<a href="javascript:poptastic('images/gh/4.jpg');">
			<img src="images/gh/4.jpg" width="175" height="175" hspace="10" /></a>
			<a href="javascript:poptastic('images/gh/5.jpg');">
			<img src="images/gh/5.jpg" width="175" height="175" hspace="10" /></a>
			<a href="javascript:poptastic('images/gh/6.jpg');">
			<img src="images/gh/6.jpg" width="175" height="175" hspace="10" /></a>
			<a href="javascript:poptastic('images/gh/7.jpg');">
			<img src="images/gh/7.jpg" width="175" height="175" hspace="10" /></a>
			<a href="javascript:poptastic('images/gh/8.jpg');">
			<img src="images/gh/8.jpg" width="175" height="175" hspace="10" /></a>
			<a href="javascript:poptastic('images/gh/9.jpg');">
			<img src="images/gh/9.jpg" width="175" height="175" hspace="10" /></a>		
			<a href="javascript:poptastic('images/gh/10.jpg');">
			<img src="images/gh/10.jpg" width="175" height="175" hspace="10" /></a>	
			
		</marquee> 


</body>
</html>