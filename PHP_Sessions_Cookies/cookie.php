<form method="post">
 <input type="text" name="cookie_value" placeholder="Enter cookie value"><br><br>
 <button type="submit" name="set_cookie">Set Cookie</button><br><br>
 <button type="submit" name="get_cookie">Get Cookie</button>
</form>
<?php
if (isset($_POST['set_cookie'])) {
 $value = $_POST['cookie_value'];
 setcookie('my_cookie', $value, time() + (86400), "/"); 
 echo "Cookie has been set" ;
} elseif (isset($_POST['get_cookie'])) {
 if (isset($_COOKIE['my_cookie'])) {
 echo "Stored cookie value: " . htmlspecialchars($_COOKIE['my_cookie']);
 } else {
 echo "No cookie is set.";
 }
}
?>
