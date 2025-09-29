<!DOCTYPE html> 
<html> 
<head> 
 <title>Login Dashboard</title> 
</head> 
<body> 
 <h2>Login Dashboard</h2> 
 <form method="post"> 
 <label>Username:</label> 
 <input type="text" name="username" required><br><br> 
 <label>Password:</label> 
 <input type="password" name="password" required><br><br> 
 <button type="submit" name="login">Login</button> 
 <button type="submit" name="newuser">New User</button> 
 <button type="submit" name="changepass">Change Password</button> 
</form> 
<?php 
$conn = mysqli_connect('localhost', 'root', '', 
'mydb'); if (!$conn) { die("Connection failed: " 
. mysqli_connect_error()); } 
if (isset($_POST['login'])) { 
 $user = $_POST['username']; 
 $pass = $_POST['password']; 
 $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'"; 
 $result = mysqli_query($conn, 
$sql); if 
(mysqli_num_rows($result) > 0) { 
echo "<br>Login Successful!"; 
 } else { echo "<br>Invalid username 
or password."; 
 } 
} 
if (isset($_POST['newuser'])) { 
 $user = $_POST['username']; 
 $pass = $_POST['password']; 
 $sql = "INSERT INTO users (username, password) VALUES ('$user', 
'$pass')"; if (mysqli_query($conn, $sql)) { echo "<br>New user 
registered successfully!"; 
 } else { echo "<br>Error: " . 
mysqli_error($conn); 
 } 
} 
if (isset($_POST['changepass'])) { 
$user = $_POST['username']; 
 $pass = $_POST['password']; 
 $newpass = $pass; 
 $sql = "UPDATE users SET password='$newpass' WHERE 
username='$user'"; if (mysqli_query($conn, $sql)) { echo 
"<br>Password updated successfully! New password: $newpass"; 
 } else { echo "<br>Error updating password: " . 
mysqli_error($conn); 
 } 
} 
mysqli_close($conn); 
?> 
</body> 
</html> 
