<?php
require_once "BookManager.php";

$bookManager = new BookManager();

// If form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"] ?? '';
    $author = $_POST["author"] ?? '';
    $publishyear = (int) ($_POST["publishyear"] ?? 0);
    $id = isset($_POST["id"]) ? (int)$_POST["id"] : null;
    
    if (isset($_POST['add'])) {
        // Add book
        $book = new Book($title, $author, $publishyear);
        $bookManager->addbook($book);
    } elseif (isset($_POST['update'])) {
        // Update book
        if ($id) {
            $book = new Book($title, $author, $publishyear);
            $bookManager->updateBook($book, $id);
        }
    } elseif (isset($_POST['delete'])) {
        // Delete book
        if ($id) {
            $bookManager->deleteBook($id);
        }
    }
}

$books = $bookManager->getAllBooks();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library Book Form</title>
</head>
<body>
    <h2>Library App</h2>
    
    <form method="POST">
        <label>ID</label><br>
        <input type="number" name="id"><br><br>
        
        <label>Title:</label><br>
        <input type="text" name="title"><br><br>
        
        <label>Author:</label><br>
        <input type="text" name="author"><br><br>
        
        <label>Publish Year:</label><br>
        <input type="number" name="publishyear"><br><br>
        
        <button type="submit" name="add">Add Book</button>
        <button type="submit" name="update">Update Book</button>
        <button type="submit" name="delete">Delete Book</button>
    </form>
    
    <hr>
    
    <h2>Book List</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publish Year</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= htmlspecialchars($book['id']) ?></td>
            <td><?= htmlspecialchars($book['title']) ?></td>
            <td><?= htmlspecialchars($book['author']) ?></td>
            <td><?= htmlspecialchars($book['publishyear']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>