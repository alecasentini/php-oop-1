<?php
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

class Genres
{
    public $genre1;
    public $genre2;

    public function __construct($genre1, $genre2)
    {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
    }
}


$shining = new Movie("Shining", "1980", new Genres("Thriller", "Horror"));
$jurassic_park = new Movie("Jurassic Park", "1993", new Genres("Avventura", "Fantascienza"));

echo $shining->getMovieInfo();
echo $jurassic_park->getMovieInfo();
