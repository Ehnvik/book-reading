<?php

require '../classes/book-model.php';
$bookModel = new BookModel(require '../partials/connection.php');

if (isset($_POST['title'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
    $authorId = filter_var($_POST['author_id'], FILTER_SANITIZE_NUMBER_INT);
    $bookModel->addBook($title, $authorId);
    header('Location: ../books.php');
}
