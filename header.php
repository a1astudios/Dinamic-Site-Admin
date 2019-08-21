<?php

# Start the session
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
}


?>
	


<?php 	include('config/setup.php');?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	
<title><?php echo $page['title'].' | '.$site_title;  ?></title>
	
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php include('config/css.php'); ?>
	
  	<?php include('config/js.php'); ?>
	
</head>
	
<body>
	
	<div id="wrap">
		
      <?php include('template/navigation.php'); // main navigation 