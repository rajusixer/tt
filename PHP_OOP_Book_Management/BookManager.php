<?php
require_once "book.php";

class BookManager {
    private $conn;
    
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "library");
        if ($this->conn->connect_error) {
            die("Connection Failed : " . $this->conn->connect_error);
        }
    }
    
    public function addbook(book $book) {
        $stmt = $this->conn->prepare("INSERT INTO book (title, author, publishyear) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $book->title, $book->author, $book->publishyear);
        $stmt->execute();
    }
    
    public function getAllBooks() {
        $result = $this->conn->query("SELECT * FROM book");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function updateBook(book $book, $id) {
        $stmt = $this->conn->prepare("UPDATE book SET title = ?, author = ?, publishyear = ? WHERE id = ?");
        $stmt->bind_param("ssii", $book->title, $book->author, $book->publishyear, $id);
        $stmt->execute();
    }
    
    public function deleteBook($id) {
        $stmt = $this->conn->prepare("DELETE FROM book WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>