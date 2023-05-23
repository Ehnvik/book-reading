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
        echo "<div class='books-container'>";
        $username = $userInfo["username"];
        $titles = $userInfo["title"];
        $reviews = $userInfo["review_text"];
        echo "<div class='book-container'>";
        echo "<h3 class='users-username'>$username</h3>";
        echo "<h4 class='users-username'>$titles</h4>";
        echo "<h4 class='users-username'>$reviews</h4>";
        echo "</div>";
        echo "</div>";
    }
}
