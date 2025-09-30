<!doctype html>
<html>
<head> <title> Fibonacci </title>
</head>
<body>
<form method="POST">
<body align="center">
 <form method="POST">
 <label for="number">Enter a number:</label><br><br>
 <input type="number" name="number" id="number" required> <br><br>
 <input type="submit" name="submit" id="submit"/><br> <br>
 </form>
<?php
if($_POST){
$a=0;
$b=1;
$number=$_POST['number'];
echo "Fibonacci series of $number is : <br>";
echo "$a<br>";
echo "$b<br>";
for ($i = 1; $i <= $number; $i++) {
$c=$a+$b;
$a=$b;
$b=$c;
echo "$c<br>";
}
}
?>
</body>
</html>
