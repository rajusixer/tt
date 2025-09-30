<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "company";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if (isset($_POST['add'])) {
    if (!empty($_POST['empid']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['salary'])) {
        $stmt = $conn->prepare("INSERT INTO employees (empid, firstname, lastname, salary) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("issd", $_POST['empid'], $_POST['firstname'], $_POST['lastname'], $_POST['salary']);
        $stmt->execute();
        echo "<script>alert('Employee added');</script>";
    } else {
        echo "<script>alert('Please fill all fields for Add');</script>";
    }
}

if (isset($_POST['update'])) {
    if (!empty($_POST['empid']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['salary'])) {
        $stmt = $conn->prepare("UPDATE employees SET firstname=?, lastname=?, salary=? WHERE empid=?");
        $stmt->bind_param("ssdi", $_POST['firstname'], $_POST['lastname'], $_POST['salary'], $_POST['empid']);
        $stmt->execute();
        echo "<script>alert('Employee updated');</script>";
    } else {
        echo "<script>alert('Please fill all fields for Update');</script>";
    }
}

if (isset($_POST['delete'])) {
    if (!empty($_POST['empid'])) {
        $stmt = $conn->prepare("DELETE FROM employees WHERE empid=?");
        $stmt->bind_param("i", $_POST['empid']);
        $stmt->execute();
        echo "<script>alert('Employee deleted');</script>";
    } else {
        echo "<script>alert('Please enter Employee ID to delete');</script>";
    }
}

$result = null;
if (isset($_POST['display'])) {
    $result = $conn->query("SELECT * FROM employees");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
</head>
<body>
<h2>Employee Management</h2>
<form method="POST">
    Employee ID <input type="number" name="empid"><br>
    First Name <input type="text" name="firstname"><br>
    Last Name <input type="text" name="lastname"><br>
    Salary <input type="number" step="0.01" name="salary"><br>
    <button type="submit" name="add">Add details</button>
    <button type="submit" name="update">Update details</button>
    <button type="submit" name="delete">Delete details</button>
    <button type="submit" name="display">Display details</button>
</form>

<?php if ($result && $result->num_rows > 0): ?>
<table border="1">
<tr>
    <th>Emp ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Salary</th>
</tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['empid'] ?></td>
    <td><?= $row['firstname'] ?></td>
    <td><?= $row['lastname'] ?></td>
    <td><?= $row['salary'] ?></td>
</tr>
<?php endwhile; ?>
</table>
<?php elseif ($result): ?>
<p>No employees found</p>
<?php endif; ?>
</body>
</html>