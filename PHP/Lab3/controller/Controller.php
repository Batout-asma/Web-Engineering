<?php
require_once './model/Model.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function getAllBooks() {
        return $this->model->getBooks();
    }

    public function getBookDetails($id) {
        return $this->model->getBookById($id);
    }
}
?>
