<?php

require 'classes/book-view.php';
require 'classes/book-model.php';

$pdo = require 'partials/connection.php';

$bookModel = new BookModel($pdo);
$bookView = new BookView();

$books = $bookModel->getAllBooks();
$bookView->renderAllBooks($books);
