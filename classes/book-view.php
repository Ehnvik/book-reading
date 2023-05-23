<?php

class BookView
{


    public function renderAllBooks(array $books)
    {
        echo "<div class='books-container'>";
        foreach ($books as $book) {
            echo "<div class='book-container'>";
            echo "<h3 class='books-title'>{$book['title']}</h3>";
            echo "</div>";
        }
        echo "</div>";
    }
}
