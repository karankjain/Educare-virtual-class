<?php
{
session_start();
}
$schedule_id= $_GET['attendance'];
//$sysdate = date('Y-m-d');//$syshr = date('h') + 3;//$sysmin = date('i') +30;//$syssec = date('s');//$systime = $sysdate." ///".$syshr.":".$sysmin.":".$syssec;//$test = 0;//echo $schedule_id;
$connect = mysql_connect("localhost","root","admin") or die("connection failed");
mysql_select_db("educare") or die(mysql_error());
$query1 = "select topic,lecturer,timing from scheduled_lecture where sch_id = '".$schedule_id."'";
$query2 = "select first_name,last_name from signup where email_id='".$_SESSION['email_id']."'";
$result1 = mysql_query($query1) or die($query1."<br/>".mysql_error());
$result2 = mysql_query($query2) or die($query2."<br/>".mysql_error());
while($row1 = mysql_fetch_array($result1))
{
	$topic = $row1['topic'];
	$lecturer = $row1['lecturer'];
	$timing = $row1['timing'];
}
while($row2 = mysql_fetch_array($result2))
{
	$fname = $row2['first_name'];
	$lname = $row2['last_name'];
}
$full_name = $fname." ".$lname;
$systime = date('Y-m-d G:i:s');
if ($timing > $systime)
{ //$test = 10;//echo $test;//echo $timing;//echo $systime;//echo $test;
	$insreg = "insert into register values ('".$topic."','".$lecturer."','".$full_name."')";
	$inschat = "insert into chat_member values('".$topic."','".$_SESSION['email_id']."','".$systime."')";
	$reschat=mysql_query($inschat) or  die("<script>alert('Already Registered');window.location='main.php';</script>");

	$result = mysql_query($insreg) or die("<script>alert('Already Registered');window.location='main.php';</script>");
	if(!$result || !$reschat)
	{
		echo "<script>alert('Already Registered');window.location='main.php';</script>";
	}
	else
	{
		echo "<script>alert('Registered Successfully');window.location='main.php';</script>";
	}
}
else
{
//echo $test;//echo $timing;//echo $systime;//while//echo $lecturer." </br>".$full_name;
	if ($lecturer == $full_name)
	{
	echo "<script>alert('Welcome Teacher');window.location='http://localhost:5080/demos/teacher.html';</script>";
	}
	else
	{
		$chkmem = "select attender from register where name='".$topic."' and lecturer='".$lecturer."' and attender='".$full_name."'";
		$memres = mysql_query($chkmem) or die($chkmem."<br/>".mysql_error());
		while($row3 = mysql_fetch_array($memres))
		{
			$attendie = $row3['attender'];
		}

		$num=mysql_numrows($memres);
		//echo $topic."-".$full_name."-".$attendie."-".$num;
		if(!$memres)
		{		
			echo mysql_error();
		}
		elseif( $num == 1)
		{
			echo "<script>alert('Welcome Student');window.location='http://localhost:5080/demos/student.html';</script>";
		}
		else
		{ 
			echo "<script>alert('Sorry you are late for registration');window.location='main.php';</script>";


		}

		
	}
}
?>