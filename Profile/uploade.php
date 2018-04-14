<?php
{
 session_start();
$filename = $_FILES["uploadedfile"]["name"];
$file_basename = substr($filename, 0, strripos($filename, '.')); // strip extention
$file_ext = substr($filename, strripos($filename, '.')); // strip name
$filesize = $_FILES["uploadedfile"]["size"];
$newFileExt = '.jpg'; 
	$test = $_SESSION['email_id'];
		// rename file
		$newfilename = $test. $newFileExt;
 echo $newfilename ;
		if (file_exists("uploads/" . $newfilename)) {
			// file already exists error
			//$error = "You have already submitted this file.";
			//echo $error;
			$myFile = "uploads/$newfilename";
                 unlink($myFile);
			move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], "uploads/" . $newfilename);
			//echo "File uploaded successfully.";
			$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
            mysql_select_db("educare") or die(mysql_error());
			$query="update profile set img='".$_SESSION['email_id'].".jpg' 
			where email_id='".$_SESSION['email_id']."'";
			$result=mysql_query($query) or die(mysql_error());
			echo '<META HTTP-EQUIV="refresh" CONTENT=" 1 ">';
			 printf("<script>location.href='profileform.php'</script>");
		}
		else 
		move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], "uploads/" . $newfilename);
		$connect=mysql_connect("localhost","root","admin") or die("connnection failed");
            mysql_select_db("educare") or die(mysql_error());
			$query="update profile set img='".$_SESSION['email_id'].".jpg' 
			where email_id='".$_SESSION['email_id']."'";
			$result=mysql_query($query) or die(mysql_error());
		printf("<script>location.href='profileform.php'</script>");
	}  
?>