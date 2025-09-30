<html>
<head>
 <title>Word Count & Search</title>
</head>
<body>
 <h2>Check Word Presence in Existing File</h2>
 <form method="POST">
 <label>Enter word to search:</label>
 <input type="text" name="searchWord" required><br><br>
 <input type="submit" name="submit" value="Analyze">
 </form>
 <?php
 if (isset($_POST['submit'])) {
 $word = strtolower($_POST['searchWord']);
 $filePath = "example.txt"; // Make sure this file exists in the same directory
 if (file_exists($filePath)) {
 $content = file_get_contents($filePath);
 $wordCount = str_word_count($content);
 echo "<h3>Total words in 'example.txt': $wordCount</h3>";
 if (stripos($content, $word) !== false) {
 echo "<p>The word <strong>'$word'</strong> is present in the file</p>";
 } else {
 echo "<p>The word <strong>'$word'</strong> is NOT present in the file</p>";
 }
 } else {
 echo "<p>File 'example.txt' not found.</p>";
 }
 }
 ?>
</body>
</html>
