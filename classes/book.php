<?php

class Book
{

    private string $title;
    private int $author_id;


    function __construct($title, $author_id)
    {
        $this->title = $title;
        $this->author_id = $author_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthorId()
    {
        return $this->author_id;
    }
}
