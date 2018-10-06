<?php

session_start();

session_unset();

	$_SESSION['userData']['picture']['url'] = NULL;
    $_SESSION['userData']['id'] = NULL;
    $_SESSION['userData']['name'] = NULL;
    $_SESSION['userData']['email'] =  NULL;
	$_SESSION['userData']['gender'] = NULL;
	
header("Location: login.php"); 

?>