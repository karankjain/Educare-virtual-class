<?php
$connect = mysql_connect("localhost","root","admin") or die("connection failed");
mysql_select_db("educare") or die(mysql_error());
$query1 = "select first_name, last_name from signup";
$result1 = mysql_query($query1) or die($query1."<br/>".mysql_error());
$fname_array = array();
$lname_array = array();
while($row1 = mysql_fetch_array($result1))
{
$fname_array[] = $row1['first_name'];
$lname_array[] = $row1['last_name'];
}
foreach ($fname_array[] as $value)
{
echo $value;
}


?>