<?php

class ReviewView
{
    public function renderAllReviewsByBook(array $reviews)
    {
        echo "<h2>{$reviews[0]['title']}</h2>";
        echo "<div class='all-reviews-container'>";
        foreach ($reviews as $review) {
            $username = $review['username'];
            $userReview = $review['review_text'];
            echo "<div class='reviews-container'>";
            echo "<h3>$username:</h3>";
            echo "<p>$userReview</p>";
            echo "</div>";
        }
        echo "</div>";
    }
}
