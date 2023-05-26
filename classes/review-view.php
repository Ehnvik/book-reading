<?php

class ReviewView
{
    public function renderAllReviewsByBook(array $reviews)
    {
        if (!empty($reviews)) {
            echo "<h2>{$reviews[0]['title']}</h2>";
            echo "<h3>Recensioner</h3>";
            echo "<div class='all-reviews-container'>";
            foreach ($reviews as $review) {
                $username = $review['username'];
                $userReview = $review['review_text'];
                echo "<div class='reviews-container'>";
                echo "<h3>$username</h3>";
                echo "<p class='user-review'>$userReview</p>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<div class='all-reviews-container'>";
            echo "<h3>Inga recensioner av den här boken</h3>";
            echo "</div>";
        }
    }
}
