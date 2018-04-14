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
//$file = "testFile.txt"; //Path to your *.txt file 
//$contents = file($file); 
//$string = implode($contents); 
//echo ($string);
printf("<script>location.href='order.php'</script>");
}

?>

