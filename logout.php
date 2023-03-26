<?php
session_start();
$_SESSION["loggedIn"] = false;
session_destroy();

// Redirect to the login page:
header('Location: index.php');
exit;
?>