<?php
require_once "db.php";

class UserModel extends DB
{
    protected $table = "users";

    public function getAllUsers()
    {
        return $this->getAll($this->table);
    }



    public function getSingleUser(string $username)
    {
        $sql = "SELECT user_books.id, users.username, books.title, reviews.review_text
        FROM user_books
        JOIN users ON user_books.user_id = users.id
        JOIN books ON user_books.book_id = books.id
        LEFT JOIN reviews ON user_books.user_id = reviews.user_id AND user_books.book_id = reviews.book_id
        WHERE users.username = :username";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
