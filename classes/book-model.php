<?php

require_once "db.php";

class BookModel extends DB
{

    protected $table = "books";

    public function getAllBooks()
    {
        $sql = "SELECT books.*, authors.name FROM books
        JOIN authors ON books.author_id = authors.id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function addBook(string $title, int $authorId)
    {
        $sql = "INSERT INTO {$this->table} (title, author_id) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$title, $authorId]);
    }
}
