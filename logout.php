<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['session']);
unset($_SESSION['main_session']);
// Delete all session variables
session_destroy();

// Jump to login page
//header('Location: index.php');
if(isset($_SERVER['HTTP_REFERER'])) {
 //header('Location: '.$_SERVER['HTTP_REFERER']);
 header('Location: index.php'); 
   
} else {
 header('Location: index.php');  
}
exit; 

?>