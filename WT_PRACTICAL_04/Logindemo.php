<?php
session_start();
// Pre-fill from session or cookie
$prefill_user = isset($_SESSION['username']) ? $_SESSION['username'] :
 (isset($_COOKIE['username']) ? $_COOKIE['username'] : '');
$prefill_pass = isset($_SESSION['password']) ? $_SESSION['password'] :
 (isset($_COOKIE['password']) ? $_COOKIE['password'] : '');
if (isset($_POST["btnlogin"])) {
 $user = $_POST["username"];
 $pass = $_POST["password"];
 $remember = isset($_POST["remember"]);
 if ($user == "" || $pass == "") {
 echo "<script>alert('Username or password cannot be empty');</script>";
 } else if ($user == "admin" && $pass == "admin123") {
 $_SESSION['username'] = $user;
 $_SESSION['password'] = $pass;
 if ($remember) {
 setcookie("username", $user, time() + (86400 * 30), "/"); // 30 days
 setcookie("password", $pass, time() + (86400 * 30), "/");
 } else {
 setcookie("username", "", time() - 3600, "/");
 setcookie("password", "", time() - 3600, "/");
 }
 header("Location: welcome.php");
 exit();
 } else {
 echo "<script>alert('Invalid credentials');</script>";
 }
}
?>
<html>
<head>
 <title>Login</title>
</head>
<body>
<form method="post">
 Username <input type="text" name="username" value="<?php echo $prefill_user; 
?>"><br><br>
 Password <input type="password" name="password" value="<?php echo $prefill_pass; 
?>"><br><br>
 <input type="checkbox" name="remember"
 <?php if (isset($_COOKIE['username'])) echo 'checked'; ?>>
 Remember Me<br><br>
 <input type="submit" name="btnlogin" value="Login"><br><br>
</form>
</body>
</html>
