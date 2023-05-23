<?php

require 'classes/book-view.php';
require 'classes/book-model.php';

$pdo = require 'partials/connection.php';

$bookModel = new BookModel($pdo);
$bookView = new BookView();

$books = $bookModel->getAllBooks();

include "./partials/header.php";
include "./partials/nav.php";
?>

<main class="container">
    <h2>Böcker</h2>
    <div class="all-books-container">
        <?php
        $bookView->renderAllBooks($books);
        ?>
    </div>
</main>


<?php
include "./partials/footer.php";
