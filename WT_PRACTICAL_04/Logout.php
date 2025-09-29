<?php
session_start();
session_unset();
session_destroy();
// Clear cookies too (optional if you want to forget login info)
setcookie("username", "", time() - 3600, "/");
setcookie("password", "", time() - 3600, "/");
header("Location: logindemo.php");
?>
