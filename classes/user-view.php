<?php

class UserView
{
    public function renderAllUsers(array $users)
    {
        echo "<div class='books-container'>";
        foreach ($users as $user) {
            $username = $user["username"];
            echo "<div class='book-container'>";
            echo "<a class='users-username-link' href='user.php?user=$username'><h3 class='users-username'>$username</h3></a>";
            echo "</div>";
        }
        echo "</div>";
    }

    public function renderSingleUser(array $userInfo)
    {
        echo "<div class='all-reviews-container'>";
        foreach ($userInfo as $info) {
            $titles = $info["title"];
            $reviews = $info["review_text"];
            $pages = $info["pages_read"];
            $author = $info["name"];
            echo "<div class='reviews-container'>";
            echo "<h3 class='users-username'>$titles</h3>";
            echo "<h4 class='users-username'>$author</h4>";
            echo "<p class='users-username'><strong>Recension:</strong> $reviews</p>";
            echo "<p class='users-username'><strong>Sidor lästa:</strong> $pages st</p>";
            echo "</div>";
        }
        echo "</div>";
    }

    public function renderUserBookForm()
    {
    }
}
