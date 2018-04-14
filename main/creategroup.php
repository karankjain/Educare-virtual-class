<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Educare|Create Group</title>
</head>
<body>
<?php

$group_name=$_POST["group_name"];
$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
$query1="select max(id) as maximum from chat_rooms";

$result1=mysql_query($query1);

while($row1 = mysql_fetch_array($result1))
{ 
$id = $row1['maximum'];
}
$new_id=$id + 1 ;
$grouptext = $group_name.".txt";

$query3 = "insert into chat_rooms values('".$new_id."','".$group_name."',0,'".$grouptext."',
'".$_SESSION['email_id']."')";
	$result3 = mysql_query($query3);
//	or die($query3."<br/><br/>".mysql_error());
	//echo "<script>alert('File Uploaded Successfully'); window.location = 'main.php';</script>";
	$time = date('y-m-d h:i:s T');
	$query2 = "insert into chat_member values('".$group_name."','".$_SESSION['email_id']."','".$time."')";
	$result2 = mysql_query($query2);
	if(!$result3 || !$result2)
{		
echo mysql_error();
}
else
{
//echo "Inserted Successfully";
//printf("<script>location.href='../Home_page/home.php'</script>");
$ourFileHandle = fopen("../Chat2/room/".$grouptext, 'w') or die("can't open file");
fclose($ourFileHandle);
echo "<script>alert('Congratulations. You Created A Group successfully.'); window.location = 'main.php';</script>";
} 
?>