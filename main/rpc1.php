<p id="searchresults">
<?php
//$queryString = $_GET['queryString'];
	// PHP5 Implementation - uses MySQLi.
	// mysqli('localhost', 'yourUsername', 'yourPassword', 'yourDatabase');
	$db = new mysqli('localhost', 'root', 'admin', 'educare');
	
	if(!$db) {
		// Show error if we cannot connect.
		echo 'ERROR: Could not connect to the database.';
	} else {
		// Is there a posted query string?
		if(isset($_POST['queryString'])) {
			$queryString = $db->real_escape_string($_POST['queryString']);
			
			// Is the string length greater than 0?
			if(strlen($queryString) >0) {
				$query = $db->query("SELECT * FROM signup s INNER JOIN profile p ON s.signup_id = p.p_id WHERE first_name LIKE '%" . $queryString . "%' or last_name LIKE '%" . $queryString . "%' ORDER BY signup_id LIMIT 8");
				
				if($query) {
					// While there are results loop through them - fetching an Object.
					
					// Store the category id
					$signup_id = 0;
					while ($result = $query ->fetch_object()) {
						if($result->signup_id != $signup_id) { // check if the category changed
							echo '<span class="category">'.$result->first_name.' &nbsp '.$result->last_name.'</span>';
							$p_id = $result->p_id;
						}
	         			echo '<a href="../Profile/profile_view.php?profile_id='.$result->email_id.'">';
	         			//echo '<a href="../educare/Profile/profileform.php">';
						echo '<img src="../Profile/uploads/'.$result->img.'" alt="" height= " 46 " width= " 46 " />';
	         			
	         			$name = $result->first_name;
	         			if(strlen($name) > 35) { 
	         				$name = substr($name, 0, 35) . "...";
	         			}	         			
	         			echo '<span class="searchheading">'.$name.'</span>';
	         			
	         			$description = $result->email_id;
	         			if(strlen($description) > 80) { 
	         				$description = substr($description, 0, 80) . "...";
	         			}
	         			
	         			echo '<span>'.$description.'</span></a>';
	         		}
	         		echo '<span class="seperator">No More Results</a></span><br class="break" />';
				} else {
					echo 'ERROR: There was a problem with the query.';
				}
			} else {
				// Dont do anything.
			} // There is a queryString.
		} else {
			echo 'There should be no direct access to this script!';
		}
	}
?>
</p>