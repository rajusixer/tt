<!DOCTYPE html>
<html>
<head><title>Sum of First N Numbers</title></head>
<body align ="center">
<form method="POST">
 Enter a number (N): <br> <br>
 <input type="number" name="number" required /> <br><br>
 <input type="submit" name="submit" value="Calculate Sum"> <br> <br>
</form>
<?php
if ($_POST) {
 $n = (int)$_POST['number'];
 $sum = ($n * ($n + 1)) / 2;
 echo "<p>Sum of first $n natural numbers is <strong>$sum</strong></p>";
}
?>
</body>
</html>
