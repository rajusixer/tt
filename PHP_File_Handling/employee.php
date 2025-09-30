<html>
<head>
 <title>Employee Data Entry</title>
</head>
<body>
 <h2>Enter Employee Details</h2>
 <form method="POST">
 <label>Employee ID:</label>
 <input type="text" name="eid" required><br><br>
 <label>Name:</label>
 <input type="text" name="name" required><br><br>
 <label>City:</label>
 <input type="text" name="city" required><br><br>
 <label>Salary:</label>
 <input type="number" name="salary" required><br><br>
 <input type="submit" name="submit" value="Save Employee">
 </form>
 <?php
 if (isset($_POST['submit'])) {
 $eid = $_POST['eid'];
 $name = $_POST['name'];
 $city = $_POST['city'];
 $salary = $_POST['salary'];
 $data = "$eid, $name, $city, $salary\n";
 file_put_contents("employees.txt", $data, FILE_APPEND);
 echo "<p> Employee details saved successfully!</p>";
 }
 ?>
</body>
</html>
