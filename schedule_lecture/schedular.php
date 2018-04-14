<?php
{
 session_start();
$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
$query2="select first_name,last_name from signup where email_id='".$_SESSION['email_id']."'";
$result2 = mysql_query($query2) or die($query2."<br/><br/>".mysql_error());
while($row2 = mysql_fetch_array($result2))
{
$fname = $row2['first_name'];
$lname = $row2['last_name'];
}
//echo $fname;
$myFile = "testFile.txt";
$fh = fopen($myFile, 'a') or die("can't open file");

$stringData = $_POST["chattext"];
$stringChat = $fname." ".$lname.":".$stringData."\n";
fwrite($fh, $stringChat);
//$stringData = "Tracy Tanner\n";
//fwrite($fh, $stringData);
fclose($fh);
//printf("<script>location.href='schedular.php'</script>");
}
?>


<html>
<head>
<script type="text/javascript">
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","testFile.txt",true);
xmlhttp.send();
}
</script>
</head>
<body>
<form method="post" action="schedular.php" >
<input type="textfield" name="chattext"\>
<input type="submit" value="chat" name="chat"\>
<script type=""text/javascript" src="chatAjax.js"></script>
</form>
<div id="myDiv"><h2>Let AJAX change this text</h2></div>
<button type="button" onclick="loadXMLDoc()">Change Content</button>
</body>
</html>
