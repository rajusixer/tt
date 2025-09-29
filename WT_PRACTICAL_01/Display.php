<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Student Info Display</title>
 <style>
 table {
 border-collapse: collapse;
 width: 50%;
 margin: 20px 0;
 }
 th, td {
 border: 1px solid #000;
 padding: 8px 12px;
 }
 th {
 background-color: #f2f2f2;
 }
 </style>
</head>
<body>
 <h2>Submitted Student Information</h2>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = $_POST["name"];
 $age = $_POST["age"];
 $email = $_POST["email"];
 $course = $_POST["course"];
 echo "
 <table>
 <tr><th>Field</th><th>Value</th></tr>
 <tr><td>Full Name</td><td>$name</td></tr>
 <tr><td>Age</td><td>$age</td></tr>
 <tr><td>Email</td><td>$email</td></tr>
 <tr><td>Course</td><td>$course</td></tr>
 </table>";
 } else {
 echo "<p>No data submitted.</p>";
 }
 ?>
</body>
</html>
