<?php

require_once __DIR__ . '/../models/genres.php';
require_once __DIR__ . '/../models/movie.php';

$arrayMovies = [
    $shining = new Movie("Shining", "1980", new Genres("Thriller", "Horror")),
    $jurassic_park = new Movie("Jurassic Park", "1993", new Genres("Avventura", "Fantascienza")),
    $inception = new Movie("Inception", "2010", new Genres("Azione", "Fantascienza")),
    $pulp_fiction = new Movie("Pulp Fiction", "1994", new Genres("Commedia", "Drammatico")),
    $fight_club = new Movie("Fight Club", "1999", new Genres("Drammatico", "Thriller")),
    $the_dark_knight = new Movie("The Dark Knight", "2008", new Genres("Azione", "Fantastico")),
    $avatar = new Movie("Avatar", "2009", new Genres("Fantascienza", "Avventura")),
    $the_hateful_eight = new Movie("The Hateful Eight", "2015", new Genres("Western", "Avventura")),
];
