<?php
{
session_start();
}
$topic = $_POST["topic"];
$description = $_POST["description"];
$date = $_POST["date"];
$month = $_POST["month"];
$year = $_POST["year"];
$duration = $_POST["duration"];
$h = $_POST["hour"];
$m = $_POST["min"];
$s = "00";
$timing = $year."-".$month."-".$date." ".$h.":".$m.":".$s;
//$sysdate = date('Y-m-d');
//$syshr = date('h') + 3;
//$sysmin = date('i') +30;
//$syssec = date('s');
//$display_time = $sysdate." ".$syshr.":".$sysmin.":".$syssec;
$test = 0;
$display_time = date('Y-n-d G:i:s');
if ($timing > $display_time)
{
$test =10;
echo $timing." ".$display_time." ".$test;
$connect = mysql_connect("localhost","root","admin") or die("connection failed");
mysql_select_db("educare") or die(mysql_error());
$query1 = "select first_name, last_name from signup where email_id = '".$_SESSION['email_id']."'";
$result1 = mysql_query($query1) or die($query1."<br/>".mysql_error());
while($row1 = mysql_fetch_array($result1))
{
$fname = $row1['first_name'];
$lname = $row1['last_name'];
}
$lecturer = $fname." ".$lname;
//$display_time = date('y-m-d h:i:s');
$query2 = "select max(sch_id) as schmax from scheduled_lecture ";
$result2 = mysql_query($query2) or die($query2."<br/>".mysql_error());
while($row2 = mysql_fetch_array($result2))
{
$schmax = $row2['schmax'];
}
//echo $schmax;
$newschmax = $schmax + 1;
$inssch = "insert into scheduled_lecture values ('".$newschmax."','".$lecturer."','".$topic."','".$description."','".$timing."','".$duration."','".$display_time."')";
$insreg = "insert into register values ('".$topic."','".$lecturer."','".$lecturer."')";
$result = mysql_query($inssch) or die($inssch."<br/>".mysql_error());
$result3 = mysql_query($insreg) or die($insreg."<br/>".mysql_error());
if(!$result || !$result3)
{
echo "error".mysql_error();
}
else
{
echo "<script>alert('lecture Scheduled Successfully');window.location='main.php';</script>";

$group_name=$topic;
$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
$query5="select max(id) as maximum from chat_rooms";

$result5=mysql_query($query5);

while($row5 = mysql_fetch_array($result5))
{ 
$id = $row5['maximum'];
}
$new_id=$id + 1 ;
$grouptext = $group_name.".txt";

$query6 = "insert into chat_rooms values('".$new_id."','".$group_name."',0,'".$grouptext."',
'".$_SESSION['email_id']."')";
	$result6 = mysql_query($query6);
//	or die($query3."<br/><br/>".mysql_error());
	//echo "<script>alert('File Uploaded Successfully'); window.location = 'main.php';</script>";
	$time = date('y-m-d h:i:s T');
	$query7 = "insert into chat_member values('".$group_name."','".$_SESSION['email_id']."','".$time."')";
	$result7 = mysql_query($query7);
	if(!$result6 || !$result7)
{		
echo mysql_error();
}
else
{
//echo "Inserted Successfully";
//printf("<script>location.href='../Home_page/home.php'</script>");
$ourFileHandle = fopen("C:/xampp/htdocs/educare/Chat2/room/".$grouptext, 'w') or die("can't open file");
fclose($ourFileHandle);
$query8 = "insert into chat_member values('".$groupname."','".$_SESSION['email_id']."','".$time."')";
$result8=mysql_query($query8) or die(mysql_error());

//echo "<script>alert('Congratulations. You Created A Group successfully.'); window.location = 'main.php';</script>";
} 
}
}
else
{
//$test =10;
//echo $timing." ".$display_time." ".$test;
echo "<script>alert('Please Check The Time. It already passed');window.location='main.php';</script>";
}
?>