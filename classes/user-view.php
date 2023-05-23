<?php

class UserView
{
    public function renderAllUsers(array $users)
    {
        echo "<div class='books-container'>";
        foreach ($users as $user) {
            echo "<div class='book-container'>";
            echo "<h3 class='books-title'>{$user['username']}</h3>";
            echo "</div>";
        }
        echo "</div>";
    }
}
