<?php

class BookView
{


    public function renderAllBooks(array $books)
    {
        echo "<ul>";
        foreach ($books as $book) {
            echo "<li>{$book['title']}</li>";
        }
        echo "</ul>";
    }
}
