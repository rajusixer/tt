<?php
session_start();
echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
?>
<html>
<head>
 <title>Welcome</title>
</head>
<body>
 <a href="logout.php">Logout</a>
</body>
</html>
