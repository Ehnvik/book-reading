<?php

require_once "db.php";

class BookModel extends DB
{

    protected $table = "books";

    public function getAllBooks()
    {
        return $this->getAll($this->table);
    }
}
