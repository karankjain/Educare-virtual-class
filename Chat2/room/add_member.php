<?php
session_start();
$groupname= $_POST['groupname'];
$member = $_POST['member'];
$member = $_POST['member'];
$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
$query="select name,creator from chat_rooms where creator='".$_SESSION['email_id']."' and name='".$groupname."'";
//echo $query;
$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
//echo mysql_num_rows($result);
if (mysql_num_rows($result) < 1)
{
echo "<script>alert('Sorry! You are not an admin of this group'); window.location = '../chatrooms.php';</script>";
}
else
{
$time = date('y-m-d h:i:s T');
$query1 = "insert into chat_member values('".$groupname."','".$member."','".$time."')";
$result1=mysql_query($query1) or die(mysql_error());
	 if(!$result1)
{		
echo mysql_error();
}
else
{
//echo $query;
//printf("<script>location.href='../main/main.php'</script>");
echo "<script>alert('Member Added Successfully'); window.location = '../chatrooms.php';</script>";
} 
}
?>