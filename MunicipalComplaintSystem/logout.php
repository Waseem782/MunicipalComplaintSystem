<?php
session_start();
session_unset();
session_destroy();
header("Location: frontend/login.php"); // redirects to login page
exit();
?>
