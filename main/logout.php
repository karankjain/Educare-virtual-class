<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['email_id']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: ../home_page/home.php');

?>