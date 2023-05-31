<?php
class Movie
{
    public $title;
    public $year;
    public $genre;

    public function __construct($title, $year, $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getMovieInfo()
    {
        return "Title: " . $this->title . ", Year: " . $this->year . ", Genre: " . $this->genre;
    }
}


$shining = new Movie("Shining", "1980", "Horror");
$jurassic_park = new Movie("Jurassic Park", "1993", "Avventura");

echo $shining->getMovieInfo();
echo $jurassic_park->getMovieInfo();
