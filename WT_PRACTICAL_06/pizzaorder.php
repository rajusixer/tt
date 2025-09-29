<?php include 'db.php'; ?>
<!doctype html>
<html>
<head><title>Pizza Shop</title></head>
<body>
<form method="POST">
<h2> Order Details </h2>
<label>Customer Name:</label><input type="text" name="name" required><br><br>
<label>Pizza Type:</label>
<select name="type" required>
<option value="Margherita">Margherita</option>
<option value="Pepperoni">Pepperoni</option>
<option value="BBQ Chicken">BBQ Chicken</option>
<option value="Paneer Pizza">Paneer Pizza</option>
 </select><br><br>
<label>Quantity:</label><br>
<input type="number" name="qty" required><br><br>
<button type="submit" name="order">Place Order</button>
</form>
<?php
if (isset($_POST['order'])) {
$stmt = $pdo->prepare("INSERT INTO orders (customer_name, pizza_type, quantity) 
VALUES (?, ?, ?)");
$stmt->execute([$_POST['name'], $_POST['type'], $_POST['qty']]);
echo "<p style='color:blue;'>Order placed successfully!</p>";
} 
?>
<hr>
<h2>Search Orders</h2>
<form method="GET">
<input type="text" name="search" placeholder="Enter customer name">
<button type="submit">Search</button>
</form>
<?php
if (isset($_GET['search'])) {
$search = "%" . $_GET['search'] . "%";
$stmt = $pdo->prepare("SELECT * FROM orders WHERE customer_name LIKE ?");
$stmt->execute([$search]);
echo "<h3>Search Results</h3>";
echo "<table border='1' cellpadding='5'>
<tr>
<th>ID</th>
<th>Customer Name</th>
<th>Pizza</th>
<th>Quantity</th>
<th>Order Time</th>
</tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "<tr>
<td>{$row['order_id']}</td>
<td>{$row['customer_name']}</td>
<td>{$row['pizza_type']}</td>
<td>{$row['quantity']}</td>
<td>{$row['order_time']}</td>
</tr>";
}
echo "</table>";
}
?>
</body>
</html>
