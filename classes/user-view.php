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

    public function renderSingleUser($userInfo)
    {
        echo "<div class='all-reviews-container'>";
        $titles = $userInfo["title"];
        $reviews = $userInfo["review_text"];
        echo "<div class='reviews-container'>";
        echo "<h3 class='users-username'>$titles</h3>";
        echo "<p class='users-username'>$reviews</p>";
        echo "</div>";
        echo "</div>";
    }
}
