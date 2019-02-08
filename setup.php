<?php
// Setup File:

error_reporting(0);

# Database Connection:
include('../config/connection.php');

# Constants:
define('D_TEMPLATE', 'template');


# functions:
include('functions/data.php');
include('functions/template.php');

# Site Setup
$debug = data_settings_value($dbc, 'debug-status');

$site_title = 'Dinamic Website';

if(isset($_GET['page'])) {
	
	$pageid = $_GET['page']; // set $pageid to equal the value given in
} else {
	
	$pageid = 1; // set $pageid equal to 1 or the home page.
}
	
# Page setup
$page = data_page($dbc, $pageid);

# User Setup:
$user = data_user($dbc, $_SESSION['username']);







?>