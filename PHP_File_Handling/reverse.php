<html>
<head>
<title>Files Operations</title>
</head>
<body>
<form method="get">
<input type="submit" name="readnum" value="Read number from file"/>
<input type="submit" name="rev" value="Write reverse to file"/>
</form>
<?php
if(isset($_GET['readnum']))
{
    $myfile1 = fopen("input.txt", "r") or die("Unable to open file");
    $n = fgets($myfile1);
    echo "Number is: " . $n;
    fclose($myfile1);
}
if(isset($_GET['rev']))
{
    $myfile1 = fopen("input.txt", "r") or die("Unable to open file");
    $n = fgets($myfile1);
    $reverse = 0;
    while($n > 0)
    {
        $reverse = $reverse * 10;
        $reverse = $reverse + $n % 10;
        $n = (int)($n / 10);
    }
    $myfile2 = fopen("output.txt", "w") or die("Unable to open file");
    fwrite($myfile2, $reverse);
    echo "Reverse is: " . $reverse;
    fclose($myfile1);
    fclose($myfile2);
}
?>
</body>
</html>
