<?php
require_once 'Book.php';

class Model {
    private $books = [];

    public function __construct() {
        $this->books[] = new Book(1, "No longer Human", "Osamu Dazai");
        $this->books[] = new Book(2, "Zicola land", "Amrou Abd El Hamid");
        $this->books[] = new Book(3, "1984", "George Orwell");
    }

    public function getBooks() {
        return $this->books;
    }

    public function getBookById($id) {
        foreach ($this->books as $book) {
            if ($book->id == $id) {
                return $book;
            }
        }
        return null;
    }
}
?>
