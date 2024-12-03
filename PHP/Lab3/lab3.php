<?php
require_once './controller/Controller.php';

$controller = new Controller();
$action = $_GET['action'] ?? 'list';

if ($action == 'list') {
    $books = $controller->getAllBooks();
    require './view/booklist.php';
} elseif ($action == 'view' && isset($_GET['id'])) {
    $book = $controller->getBookDetails($_GET['id']);
    require './view/viewbook.php';
} else {
    echo "Invalid action.";
}
?>
