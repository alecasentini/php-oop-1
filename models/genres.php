<?php
class Genres
{
    public $genre1;
    public $genre2;

    public function __construct($genre1, $genre2)
    {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
    }

    public function getAllGenres()
    {
        return $this->genre1 . ", " . $this->genre2;
    }
}
