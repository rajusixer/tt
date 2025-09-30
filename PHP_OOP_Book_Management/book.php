<?php
class Book {
    public $title;
    public $author;
    public $publishyear;
    
    public function __construct($title, $author, $publishyear) {
        $this->title = $title;
        $this->author = $author;
        $this->publishyear = $publishyear;
    }
}
?>