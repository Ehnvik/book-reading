<?php

class BookView
{


    public function renderAllBooks(array $books)
    {
        echo "<div class='books-container'>";
        foreach ($books as $book) {
            $title = $book['title'];
            $name = $book['name'];
            $id = $book['id'];
            echo "<a class='book-container users-username-link' href='reviews.php?id=$id'>
             <div>
             <h3 class='books-title users-username'>$title</h3>
            <p class='books-title users-username'>$name</p>
            </div>
            </a>";
        }
        echo "</div>";
    }
}
