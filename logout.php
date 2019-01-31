<?php

# Start Session:
session_start();

unset($_SESSION['username']); // Delete the username key

//session_destroy(); //this would delete all of the sessions keys

header('Location: login.php'); //redirect to login.php

?>