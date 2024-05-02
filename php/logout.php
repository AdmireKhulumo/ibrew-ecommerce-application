<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// redirect to index
header("Location: ../index.php");
exit;
?>