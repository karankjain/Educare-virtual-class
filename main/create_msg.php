<?php
{
 session_start();
//connection to database
$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());

	  
	$date = date(' y-m-d H:i:s T ');
	//echo $date;
	$to = $_POST["to"];
	$msg = $_POST["msg"];
	$query3 = "insert into message values('".$to."','".$_SESSION['email_id']."','".$msg."','".$date."' )";
	$result3 = mysql_query($query3) or die($query3."<br/><br/>".mysql_error());
	$myFile = "msg/msg_".$to.".txt";
$fh = fopen($myFile, 'a') or die("can't open file");

$stringData = $_POST["msg"];
$stringChat = $_SESSION['email_id'].":".$stringData."\n";
fwrite($fh, $stringChat);
fclose($fh);
	echo "<script>alert('Message Send Successfully'); window.location = 'createMsg.php';</script>";
	}
?>