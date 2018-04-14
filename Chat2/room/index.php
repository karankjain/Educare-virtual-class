<?php
 session_start();

    if (isset($_GET['name']) && isset($_SESSION['email_id']))
	{
    
      require_once("../dbcon.php");
  
      $name = cleanInput($_GET['name']);
      $query = "select * from chat_member where room='".$name."' AND member='".$_SESSION['email_id']."'";
	  $result = mysql_query($query) or die($query2."<br/><br/>".mysql_error());  
      $getRooms = "SELECT *
  			           FROM chat_rooms
  		             WHERE name = '$name'";
  		         
      $roomResults = mysql_query($getRooms);
	  	if (mysql_num_rows($roomResults) <= 1 && mysql_num_rows($result) < 1) {
  			//header("Location: ../chatrooms.php");
			//echo "success";
			echo "<script>alert('Sorry! You are not a member of this group'); window.location = '../chatrooms.php';</script>";
  			die();
  		}
        	else
			{
      while ($rooms = mysql_fetch_array($roomResults)) {
          $file =  $rooms['file'];
      }
}
}
else
{
die("final unable");
}
?>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome to: <?php echo $name; ?></title>
    <link rel="stylesheet" type="text/css" href="../main.css"/>
      <link rel="stylesheet" type="text/css" href="../../style.css" />
  <link rel="stylesheet" type="text/css" href="../../menubar.css" />
  <link rel="stylesheet" type="text/css" href="../../main/style.css" />
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
    	var chat = new Chat('<?php echo $file; ?>');
    	chat.init();
    	chat.getUsers(<?php echo "'" . $name ."','" .$_SESSION['email_id'] . "'"; ?>);
    	var name = '<?php echo $_SESSION['email_id'];?>';
    </script>
    <script type="text/javascript" src="settings.js"></script>


</head>
<body class="signup_main_body">
<div class="drop_panel">
<ul style="position:relative; top:6pt; left:-20pt;">
<li style="display:inline;">Logged in as <b><?php echo $_SESSION['email_id']; ?></b></li>
<li style="display:inline;float:right; margin-right:15px; ">
<a class="menu" href="../../main/logout.php"><b>Logout</b></a></li>
<li style="display:inline;float:right; margin-right:15px; ">
<a class="menu" href="../../main/main.php"><b>Home</b></a></li>
</ul>
</div>


<body>

    <div id="page-wrap"> 
    
    	<div id="header">
    	
        	<!--<h1><a href="/examples/Chat2/">Chat v2</a></h1>
        	
        	<div id="you"><span>Logged in as:</span> <?php echo $_SESSION['email_id']?></div>-->
        	
        </div>
        
    	<div id="section">
    
            <h2 style="color:#62AAD3;"><?php echo $name; ?></h2>
                     
            <div id="chat-wrap">
                <div id="chat-area"></div>
            </div>
            
            <div id="userlist"></div>
                
                <form id="send-message-area" action="">
                    <textarea id="sendie" maxlength='100'></textarea>
                </form>
            
        </div>
        
    </div>
        
</body>

</html>

<?php
   // else:
     //       header('Location: http://css-tricks.com/examples/Chat2/');
    //endif; 
?>
