<?php
// DB connection config
$host = 'localhost';
$db = 'pizza_shop';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
// Set up DSN and options for PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
// Connect to DB or die on error
try {
 $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
 die("DB Connection failed: " . $e->getMessage());
}
// Create table if not exists
$pdo->exec("CREATE TABLE IF NOT EXISTS orders (
 id INT AUTO_INCREMENT PRIMARY KEY,
 customer_name VARCHAR(100) NOT NULL,
 pizza_type VARCHAR(100) NOT NULL,
 quantity INT NOT NULL,
 order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");
// Predefined pizza options
$pizzaOptions = [
 "Margherita",
 "Pepperoni",
 "Veggie",
 "BBQ Chicken",
];
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['place_order'])) {
 $name = $_POST['customer_name'];
 $pizza = $_POST['pizza_type'];
 $quantity = (int)$_POST['quantity'];
 // Basic validation: pizza type must be one of options
 if (!in_array($pizza, $pizzaOptions)) {
 echo "<p style='color: red;'>Invalid pizza type selected.</p>";
 } else {
 $stmt = $pdo->prepare("INSERT INTO orders (customer_name, pizza_type, quantity) 
VALUES (?, ?, ?)");
 $stmt->execute([$name, $pizza, $quantity]);
 echo "<p style='color: green;'>✅ Order placed successfully!</p>";
 }
}
// Handle search
$search_results = [];
if (isset($_GET['search'])) {
 $query = trim($_GET['query']);
 $stmt = $pdo->prepare("SELECT * FROM orders WHERE customer_name LIKE ? OR id 
= ?");
 $stmt->execute(["%$query%", $query]);
 $search_results = $stmt->fetchAll();
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>🍕 Pizza Order App</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 <h1>🍕 Place Your Pizza Order</h1>
 <form method="post">
 <label>Customer Name:</label><br>
 <input type="text" name="customer_name" required><br><br>
 <label>Pizza Type:</label><br>
 <select name="pizza_type" required>
 <option value="">-- Select Pizza --</option>
 <?php foreach ($pizzaOptions as $option): ?>
 <option value="<?= htmlspecialchars($option) ?>"><?= htmlspecialchars($option) ?></option>
 <?php endforeach; ?>
 </select><br><br>
 <label>Quantity:</label><br>
 <input type="number" name="quantity" min="1" required><br><br>
 <input type="submit" name="place_order" value="Place Order">
 </form>
 <hr>
 <h2>🔍 Search Orders</h2>
 <form method="get">
 <input type="text" name="query" placeholder="Enter customer name or order ID">
 <input type="submit" name="search" value="Search">
 </form>
 <?php if (!empty($search_results)): ?>
 <h3>Search Results:</h3>
 <table border="1" cellpadding="5" cellspacing="0">
 <tr>
 <th>ID</th>
 <th>Name</th>
 <th>Pizza Type</th>
 <th>Quantity</th>
 <th>Order Time</th>
 </tr>
 <?php foreach ($search_results as $order): ?>
 <tr>
 <td><?= $order['id'] ?></td>
 <td><?= htmlspecialchars($order['customer_name']) ?></td>
 <td><?= htmlspecialchars($order['pizza_type']) ?></td>
 <td><?= $order['quantity'] ?></td>
 <td><?= $order['order_time'] ?></td>
 </tr>
 <?php endforeach; ?>
 </table>
 <?php elseif (isset($_GET['search'])): ?>
 <p>No results found.</p>
 <?php endif; ?>
</body>
</html>
