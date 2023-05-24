<?php

require_once "db.php";

class ReviewModel extends DB
{

    public function getAllReviewsByBook(int $id)
    {
        $sql = "SELECT reviews.*, users.username, books.title FROM reviews
        JOIN users ON reviews.user_id = users.id
        JOIN books ON reviews.book_id = books.id
        WHERE reviews.book_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
