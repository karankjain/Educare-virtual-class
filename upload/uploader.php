<?php
{
 session_start();
$filename = $_FILES["uploadedfile"]["name"];
$file_basename = substr($filename, 0, strripos($filename, '.')); // strip extention
$file_ext = substr($filename, strripos($filename, '.')); // strip name
//echo $file_ext;
$filesize = $_FILES["uploadedfile"]["size"];
//connection to database
 $connect=mysql_connect("localhost","root","admin") or die("connnection failed");
mysql_select_db("educare") or die(mysql_error());
//query to get up_id
$query1="select max(up_id) as maximum from upload";

$result1=mysql_query($query1);

while($row1 = mysql_fetch_array($result1))
{ 
$up_id = $row1['maximum'];
}
//echo $up_id;
//echo $_SESSION['email_id'];
//query to get firstname and last name
$query2="select first_name,last_name from signup where email_id='".$_SESSION['email_id']."'";
$result2 = mysql_query($query2) or die($query2."<br/><br/>".mysql_error());
while($row2 = mysql_fetch_array($result2))
{
$fname = $row2['first_name'];
$lname = $row2['last_name'];
}
//echo $fname;
//echo $lname;
$new_upid = $up_id + 1;
	$test = $new_upid;
		// rename file
		$newfilename = $test. $file_ext;
 //echo $newfilename ;
		if (file_exists("uploads/" . $newfilename)) {
			
			$myFile = "uploads/$newfilename";
                 unlink($myFile);
			move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], "uploads/" . $newfilename);
			//echo "File uploaded successfully.";
			echo '<META HTTP-EQUIV="refresh" CONTENT=" 1 ">';
			 //printf("<script>location.href='profileform.php'</script>");
		}
		else 
		move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], "uploads/" . $newfilename);
		//printf("<script>location.href='profileform.php'</script>");
	}  
	$date = date(' y-m-d H:i:s ');
	//echo $date;
	$name = $_POST["filename"];
	$description = $_POST["descript"];
	$query3 = "insert into upload values('".$new_upid."','".$name."','".$file_ext."','".$description."','".$_SESSION['email_id']."','".$fname."','".$lname."','".$date."' )";
	$result3 = mysql_query($query3) or die($query3."<br/><br/>".mysql_error());
	echo "<script>alert('File Uploaded Successfully'); window.location = 'upload.php';</script>";
?>