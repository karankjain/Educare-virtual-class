<?php 
    
    session_start();

    require_once("dbcon.php");

    if (checkVar($_SESSION['email_id'])): 
 
        $getRooms = "SELECT *
        			 FROM chat_rooms";
        $roomResults = mysql_query($getRooms);		  

?>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <title>Chat Rooms</title>
     <link rel="stylesheet" type="text/css" href="../style.css" />
  <link rel="stylesheet" type="text/css" href="../menubar.css" />
   <link rel="stylesheet" type="text/css" href="main.css"/>
  <link rel="stylesheet" type="text/css" href="../main/style.css" />
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
</head>

<body class="signup_main_body">
<div class="drop_panel">
<ul style="position:relative; top:6pt; left:-20pt;">
<li style="display:inline;">Logged in as <b><?php echo $_SESSION['email_id']; ?></b></li>
<li style="display:inline;float:right; margin-right:15px; ">
<a class="menu" href="../main/logout.php"><b>Logout</b></a></li>
<li style="display:inline;float:right; margin-right:15px; ">
<a class="menu" href="../main/main.php"><b>Home</b></a></li>
</ul>
</div>

    <div id="page-wrap"> 
    
    	<div id="header">
    	
        	<!--<h1><a href="/examples/Chat2/">Chat v2</a></h1>
        	
        	<div id="you"><span>Logged in as:</span> <?php echo $_SESSION['email_id']?></div>-->
        	
        </div>
        
    	<div id="section">
    	<h3 style="color:#62AAD3;">Rooms</h3>
				<a class="side" style="position:relative; top:-45px; left:600px; font-size:18px;" 
				href="room/addmember.php">Add Member</a>
            <div id="rooms">
            	
                <ul>
                    
                       <?php while($rooms = mysql_fetch_array($roomResults)):
                            $room = $rooms['name'];
                            $query = mysql_query("SELECT creator FROM `chat_rooms` WHERE `name` = '$room' ") or die("Cannot find data". mysql_error());
                            while ($row = mysql_fetch_array($query))
							{
							$creator = $row['creator'];
							}
							//$no_of_users = mysql_num_rows($query);
							?>
                    
                    <li>
                        <a href="room/?name=<?php echo $rooms['name']?>"><?php echo $rooms['name'] . "<span>Admin: <strong>" . $creator . "</strong></span>" ?></a>
                    </li>
                     <?php endwhile; ?>
                </ul>
            </div>
        </div>
        
    </div>

</body>

</html>

<?php 

    else: 
	   header('Location: http://css-tricks.com/examples/Chat2/');
	   
	endif;
	
?>