<?php
require_once __DIR__ . '/genres.php';
class Movie
{
    public $title;
    public $year;
    public $genre;

    public function __construct($title, $year, Genres $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getMovieInfo()
    {
        return "<p>Title: " . $this->title . ", Year: " . $this->year . ",  Genre: " . $this->genre->genre1 . ", " . $this->genre->genre2 . "</p>";
    }
}
