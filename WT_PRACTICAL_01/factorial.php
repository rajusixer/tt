<!DOCTYPE html>
<html>
<head>
 <title>Factorial</title>
 
</head>
<body align="center">
 <form method="POST">
 <label for="number">Enter a number:</label><br><br>
 <input type="number" name="number" id="number" required> <br><br>
 <input type="submit" name="submit" id="submit"/><br> <br>
 </form>
<?php
if ($_POST){
$fact=1;
$number=$_POST['number'];
echo "Factorial of $number is: ";
for ($i=1;$i<=$number;$i++){
$fact=$fact*$i;
}
echo $fact. "<br>";
}
?>
</body>
</html>
