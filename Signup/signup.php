 <?php

require_once('recaptchalib.php');
  $privatekey = "6LekscwSAAAAAONInECLSumIGuZlKa5cAkso6sYb";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
$fname=$_POST["Fname"];
$lname=$_POST["Lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender =$_POST["gender"];
$date =$_POST["date"];
$month=$_POST["month"];
$year=$_POST["year"];



$connect=mysql_connect("localhost","root","admin") or die("connnection failed");

 
mysql_select_db("educare") or die(mysql_error());
$query1="select signup_id from signup";
$result=mysql_query($query1);

$num=mysql_numrows($result);
//echo $num;
$signup_id=mysql_result($result,($num-1),"signup_id");
//echo $signup_id;
$new_signup_id=$signup_id + 1;
//echo new_signup_id;
//mysql_close();
//echo mysql_query($query1);
$msg = "msg_".$email.".txt";
$activateDate = date("Y-m-d");
$query="Insert into signup(signup_id,first_name,last_name,email_id,password,gender,date,month,year,dateActivate,msg) 
values ('".$new_signup_id."','".$fname."','".$lname."','".$email."','".$password."','".$gender."','".$date."','".$month."','".$year."','".$activateDate."','".$msg."')";
$query1="Insert into profile(p_id,email_id) values ('".$new_signup_id."','".$email."')";
$result=mysql_query($query);
$result1=mysql_query($query1);
//echo "hi";
	 if(!$result || !$result1)
{		
echo mysql_error();
}
else
{
//echo "Inserted Successfully";
//printf("<script>location.href='../Home_page/home.php'</script>");
$ourFileHandle = fopen("../main/msg/".$msg, 'w') or die("can't open file");
fclose($ourFileHandle);
echo "<script>alert('Congratulations. Sign In Using Educare Home Page.'); window.location = '../Home_page/home.php';</script>";
} 
	 }
?>